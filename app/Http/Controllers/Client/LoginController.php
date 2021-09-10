<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequesrt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{

    public function index()
    {
        return view('.Client.Login.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return \redirect('/')->with('login-success', 'dăng nhập thành công');
        } else {
            return back()->with('login-error', 'Tài khoản và / hoặc mật khẩu không hợp lệ. Vui lòng kiểm tra và thử lại.');
        }
//        $data = User::query()->where('email', $request->email)->first();
//        if ($data !=  null){
//            if (Hash::check($request->password, $data->password)){
//
//                return 'dang nhap tai khoan thanh cong';
//            }else{
//                return view('.Client.Login.login');
//            }
//        }else{
//            return 'khong tim thay';
//        }
    }
}
