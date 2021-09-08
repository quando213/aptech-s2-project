<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUserPostRequest;
use App\Http\Requests\UpdateIn4PostRequest;
use App\Models\District;
use App\Models\Group;
use App\Models\User;
use App\Models\Ward;

use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    public function index(){
        $data = User::query()->with(['district','ward','group'])->orderBy('created_at','desc')->get();
        return view('Admin.User.list',[
            'data'=>$data,
            'title'=>'Trang người dùng',
            'breadcrumb'=>'Hiện thị người dùng'
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
