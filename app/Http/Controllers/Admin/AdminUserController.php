<?php

namespace App\Http\Controllers\Admin;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminCreateUserRequest;
use App\Http\Requests\AdminUpdateUserRequest;
use App\Models\District;
use App\Models\Group;
use App\Models\User;
use App\Models\Ward;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    public function index(Request $request, $role = null)
    {
        $search = $request->query('search');
        $limit = $request->query('limit') ?? 50;
        $district_id = $request->query('district_id');
        $data = User::query()->with(['district', 'ward', 'group']);
        if ($role) {
            $data->where('role', $role);
        } else {
            $data->where('role', UserRole::USER);
        }
        $data = buildQuery($request, $data, ['district_id', 'ward_id']);
        if ($search && strlen($search)) {
            $data = $data->where(function (Builder $q) use ($search) {
                return $q->where('first_name', 'like', '%' . $search . '%')
                    ->orWhere('last_name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('street', 'like', '%' . $search . '%')
                    ->orWhere('phone', 'like', '%' . $search . '%')
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
            'wards' => $district_id ? Ward::query()->where('district_id', $district_id)->orderBy('name')->get() : [],
            'role' => $role
        ]);
    }

    public function create()
    {
        $districts = District::query()->orderBy('name')->get();
        $groups = Group::query()->orderBy('name')->get();
        return view('Admin.User.form', [
            'districts' => $districts,
            'groups' => $groups
        ]);
    }

    public function update($id)
    {
        $data = User::find($id);
        $districts = District::query()->orderBy('name')->get();
        $wards = Ward::where('district_id', $data->district_id)->get();
        $groups = Group::query()->orderBy('name')->get();
        return view('Admin.User.form', [
            'districts' => $districts,
            'wards' => $wards,
            'groups' => $groups,
            'data' => $data,
        ]);
    }

    public function store(AdminCreateUserRequest $request)
    {
        $user = new User();
        $user->fill($request->validated());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('userList', ['role' => $request['role']])
            ->with('message', 'Tao mới thành công người dùng ' . $user->last_name . ' ' . $user->first_name);
    }

    public function save(AdminUpdateUserRequest $request, $id)
    {
        $user = User::find($id);
        $user->update($request->validated());
        $user->save();
        return redirect()->route('userList', ['role' => $request['role']])
            ->with('message', 'Sửa thành công người dùng ' . $user->last_name . ' ' . $user->first_name);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $role = $user['role'];
        $user->delete();
        return redirect()->route('userList', ['role' => $role])
            ->with('message', 'Xóa thành công người dùng ' . $user->last_name . ' ' . $user->first_name);
    }

    public function detailShipper()
    {
        $data = Auth::user();
        return view('Admin.Shipper.profile', ['data' => $data]);
    }

    public function detailGroup()
    {
        $data = Auth::user()->group;
        return view('Admin.Shipper.group', ['data' => $data]);
    }
}
