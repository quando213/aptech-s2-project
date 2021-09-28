<?php

namespace App\Http\Controllers\Client;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientUserRequest;
use App\Http\Requests\UpdateAccount;
use App\Models\District;
use App\Models\Group;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use App\Models\Notification;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EntryController extends Controller
{
    public function register()
    {
        if (Auth::user()) {
            return redirect()->route('home');
        }
        $districts = District::query()->orderBy('name', 'asc')->get();
        return view('Client.login', [
            'districts' => $districts
        ]);
    }

    public function processRegister(ClientUserRequest $request)
    {
        $user = new User();
        $user->fill($request->validated());
        $user->password = Hash::make($request['password']);
        $user->role = UserRole::User;
        $user->group_id = 0;
        $user->position = "User";
        $user->save();
        return redirect()->route('processLogin')->with(['status' => 'Tạo tài khoản thành công. Vui lòng đăng nhập để tiếp tục.']);
    }

    public function processLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        } else {
            return back()->with('error-login', 'Tài khoản và / hoặc mật khẩu không hợp lệ. Vui lòng kiểm tra và thử lại.');
        }
    }

    public function logout()
    {
        Auth::logout();
        Cart::destroy();
        return redirect('/');
    }
}
