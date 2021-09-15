<?php

namespace App\Http\Controllers\Client;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientUserRequest;
use App\Models\District;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class EntryController extends Controller
{
    public function register()
    {
        $districts = District::query()->orderBy('name', 'asc')->get();
        return view('Client.login', [
            'data' => $districts
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
    public function logout(){
        Auth::logout();
        Cart::destroy();
        return redirect('/');
    }
    public function profile(){
        $data = User::query()->where('id',Auth::user()->id)->with(['district','ward','group'])->first();
        return view('.Client.my-account',[
            "data"=>$data
        ]);
    }
    public function editProfile(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::find(Auth::user()->id);
            $user->fill($request->all());
            $user->password = Hash::make($request['newPassword']);
            $user->save();
            Session::flash('messenger', 'Đổi thông tin thành công.');
            return back();
        } else {
            Session::flash('messenger', ' Mật khẩu không hợp lệ. Vui lòng kiểm tra và thử lại.');
            return back();
        }
    }
}
