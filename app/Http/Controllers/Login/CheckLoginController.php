<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;



class CheckLoginController extends Controller
{
    public function loginView() {
        return view('/login');
    }
    public function checkLogin(Request $request)
    {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ],[
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            ]);
            $email = $request->input('email');
            $password = $request->input('password');

            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                // Kiểm tra đúng email và mật khẩu sẽ chuyển trang
                Session::put('accountLogin', true);
                return redirect('/');
            } else {
                // Kiểm tra không đúng sẽ hiển thị thông báo lỗi
                Session::flash('error', 'Email hoặc mật khẩu không đúng!');
                return redirect('/login');
            }
        }
}
