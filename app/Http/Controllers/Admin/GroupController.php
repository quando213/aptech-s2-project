<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\GroupRequest;
use App\Models\District;
use App\Models\Group;
use App\Models\User;
use App\Models\Ward;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $limit = $request->query('limit') ?? 50;
        $district_id = $request->query('district_id');

        $data = Group::query()->with(['ward']);
        $data = buildQuery($request, $data, ['ward_id']);
        if ($search && strlen($search)) {
            $data = $data->where(function (Builder $q) use ($search) {
                return $q->where('name', 'like', '%' . $search . '%')
                    ->orWhere('id', 'like', '%' . $search . '%');
            });
        }
        if ($district_id) {
            $data = $data->whereHas('ward', function (Builder $q) use ($district_id) {
                return $q->where('district_id', $district_id);
            });
        }

        return view('Admin.Group.list', [
            'data' => $data->paginate($limit),
            'districts' => District::query()->orderBy('name')->get(),
            'wards' => $district_id ? Ward::query()->where('district_id', $district_id)->orderBy('name')->get() : []
        ]);
    }

    public function create()
    {
        $districts = District::query()->orderBy('name')->get();
        return view('Admin.Group.form',[
            'districts' => $districts
        ]);
    }

    public function store(GroupRequest $request)
    {
        $data = $request->validated();
        $group = new Group();
        $group->fill($data);
        $group->save();
        return redirect()->route('groupList')->with('message','Tạo mới thành công nhóm '.$group->name);
    }

    public function update($id)
    {
        $data = Group::query()->where('id', $id)->firstOrFail();
        $districts = District::query()->orderBy('name')->get();
        $wards = $data->ward->district->wards;
        return view('Admin.Group.form',[
            'districts' => $districts,
            'wards' => $wards,
            'data' => $data
        ]);
    }

    public function save($id, GroupRequest $request)
    {
        $group = Group::query()->where('id', $id)->firstOrFail();
        $data = $request->validated();
        $group->update($data);
        $group->save();
        return redirect()->route('groupList')->with('message','Sửa thành công nhóm '.$group->name);
    }

    public function destroy($id)
    {
        $group = Group::query()->where('id', $id)->firstOrFail();
        $group->delete();
        return redirect()->route('groupList')->with('message','Xóa thành công nhóm '.$group->name);
    }
}
