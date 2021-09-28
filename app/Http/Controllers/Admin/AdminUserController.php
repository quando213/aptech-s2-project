<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserPostRequest;
use App\Http\Requests\UpdateIn4PostRequest;
use App\Models\District;
use App\Models\Group;
use App\Models\User;
use App\Models\Ward;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $limit = $request->query('limit') ?? 50;
        $district_id = $request->query('district_id');

        $data = User::query()->with(['district', 'ward', 'group']);
        $data = buildQuery($request, $data, ['district_id', 'ward_id']);
        if ($search && strlen($search)) {
            $data = $data->where(function (Builder $q) use ($search) {
                return $q->where('first_name', 'like', '%' . $search . '%')
                    ->orWhere('last_name', 'like', '%' . $search . '%')
                    ->orWhere('shipping_street', 'like', '%' . $search . '%')
                    ->orWhere('shipping_phone', 'like', '%' . $search . '%')
                    ->orWhereHas('district', function ($q) use ($search) {
                        return $q->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhereHas('ward', function ($q) use ($search) {
                        return $q->where('name', 'like', '%' . $search . '%');
                    })
                    ->orWhere('id', 'like', '%' . $search . '%');
            });
        }

        return view('Admin.User.list', [
            'data' => $data->paginate($limit),
            'districts' => District::query()->orderBy('name')->get(),
            'wards' => $district_id ? Ward::query()->where('maqh', $district_id)->orderBy('name')->get() : []
        ]);
    }
    public function create(){
        $district = District::query()->orderBy('name','asc')->get();
        $group = Group::query()->orderBy('name','asc')->get();
        return view('Admin.User.form',[
            'districts'=>$district,
            'group'=>$group,
            'data'=>null,
            'title'=>'Trang thêm mới người dùng',
            'breadcrumb'=>'Tạo mới người dùng'
        ]);
    }
    public function store(AdminUserPostRequest $request){
        $user = new User();
        $user->fill($request->validated());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('userList')->with('message','Tao mới thành công người dùng '.$user->first_name .' '.$user->last_name);
    }
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('userList')->with('message','Xóa thành công người dùng '.$user->first_name .' '.$user->last_name);
    }
    public function update($id){
        $data = User::find($id);
        $key = ($data->ward_id);
        $ward = Ward::where('xaid',$key)->first();
        $district = District::query()->orderBy('name','asc')->get();
        $group = Group::query()->orderBy('name','asc')->get();
        return view('Admin.User.form',[
            'districts'=>$district,
            'group'=>$group,
            'data'=>$data,
            'ward'=>$ward,
            'title'=>'Users',
            'breadcrumb'=>'Edit User'

        ]);
    }
    public function save(UpdateIn4PostRequest $request,$id){
        $user = User::find($id);
        $user->update($request->validated());
        $user->save();
        return redirect()->route('userList')->with('message','Sửa thành công người dùng '.$user->first_name .' '.$user->last_name);
    }

}
