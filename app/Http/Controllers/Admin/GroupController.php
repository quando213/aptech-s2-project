<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\GroupPostRequest;
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
                return $q->where('maqh', $district_id);
            });
        }

        return view('Admin.Group.list', [
            'data' => $data->paginate($limit),
            'districts' => District::query()->orderBy('name')->get(),
            'wards' => $district_id ? Ward::query()->where('maqh', $district_id)->orderBy('name')->get() : []
        ]);
    }

    public function create()
    {
        $districts = District::query()->orderBy('name')->get();
        return view('Admin.Group.form',[
            'districts' => $districts
        ]);
    }

    public function store(GroupPostRequest $request)
    {
        $data = $request->validated();
        $group = new Group();
        $group->fill($data);
        $group->save();
        return redirect()->route('groupList')->with('message','Tạo mới thành công nhóm '.$group->name);
    }

    public function update($id)
    {
        $data = Group::find($id);
        $districts = District::query()->orderBy('name')->get();
        $wards = $data->ward->district->wards;
        return view('Admin.Group.form',[
            'districts' => $districts,
            'wards' => $wards,
            'data' => $data
        ]);
    }

    public function save($id,GroupPostRequest $request)
    {
        $group = Group::find($id);
        $data = $request->validated();
        $group->update($data);
        $group->save();
        return redirect()->route('groupList')->with('message','Sửa thành công nhóm '.$group->name);
    }

    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect()->route('groupList')->with('message','Xóa thành công nhóm '.$group->name);
    }

    public function personnel()
    {
        $personnel = User::query()->where('group_id',Auth::user()->group_id)->with(['district','ward','group'])->get();
        return view('Admin.Group.personnel',[
            'title'=>'Group',
            'breadcrumb'=>'Edit Group',
            'personnel'=>$personnel
        ]);
    }

    public function check()
    {
        $personnel = User::query()->where('group_id',Auth::user()->group_id)
            ->with(['district','ward','group'])->get();
        return view('Admin.Group.personnel',[
            'title'=>'Group',
            'breadcrumb'=>'Edit Group',
            'personnel'=>$personnel
        ]);
    }
}
