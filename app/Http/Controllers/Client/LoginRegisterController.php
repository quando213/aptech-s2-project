<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use App\Models\District;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function signUp()
    {
        $district = District::query()->orderBy('name', 'asc')->get();
        return view("Client.Login.sign-up", [
            'districts' => $district
        ]);
    }

    public function save(Request $request)
    {
        $user = new User();
        $user->fill([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
            'password' =>Hash::make($request['password']),
            'district_id' => $request['district_id'],
            'ward_id' => $request['ward_id'],
            'street' => $request['street'],
            'phone' => $request['phone'],
            'group_id' => 0,
            'role' => 0,
            'position' => 0,
        ]);

        $user->save();
        return redirect('/');
    }


}
