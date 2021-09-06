<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\GroupPostRequest;
use App\Models\Group;
use App\Models\Ward;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {
        $data = Group::query()->with('ward')->orderBy('created_at','desc')->get();
        return view('Admin.Group.list',[
            'data'=>$data,
            'title'=>'Group',
            'breadcrumb'=>'List Groups'
        ]);
    }


    public function create()
    {
        $ward = Ward::all()->sortBy('name');
        return view('Admin.Group.form',[
            'ward'=>$ward,
            'data'=>null,
            'title'=>'Group',
            'breadcrumb'=>'Create Group'
        ]);
    }


    public function store(GroupPostRequest $request)
    {
        $data = $request->validated();
        $group = new Group();
        $group->fill($data);
        $group->save();
        return redirect()->route('groupList')->with('message','Tao mới đơn vị '.$group->name);
    }
    public function update($id)
    {
        $data = Group::find($id);
        $ward = Ward::all()->sortBy('name');
        return view('Admin.Group.form',[
            'ward'=>$ward,
            'data'=>$data,
            'title'=>'Group',
            'breadcrumb'=>'Edit Group'
        ]);
    }
    public function save($id,GroupPostRequest $request)
    {
        $group = Group::find($id);
        $data = $request->validated();
        $group->update($data);
        $group->save();
        return redirect()->route('groupList')->with('message','Sửa thành công đơn vị '.$group->name);
    }
    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();
        return redirect()->route('groupList')->with('message','Xóa thành công đơn vị '.$group->name);
    }
}
