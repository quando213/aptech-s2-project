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

    public function logout()
    {
        Auth::logout();
        Cart::destroy();
        return redirect('/');
    }

    public function myOrderDetail($id,$notification)
    {
        if ($notification){
            $upNotification = Notification::query()->where(['sender_id' => Auth::id(),'id'=>$notification])->first();
            if ($upNotification->the_send == false ){
                $upNotification->update([
                        'the_send'=> true
                    ]);
                $upNotification->save();
            }
        }
        $order = Order::query()->where('id',$id)->with(['district','ward','user'])->orderBy('created_at','desc')->first();
        $groupShipper = Group::query()->where('ward_id',$order->shipping_ward_id)->first();
        $orderDetails = OrderDetail::query()->where(['order_id'=>$id])->with(['product'])->get();
        return view('Client.my-order-detail',[
            'order'=>$order,
            'orderDetails'=>$orderDetails
        ]);
    }

    public function updateAccount(UpdateAccount $account)
    {
        $user = User::find(Auth::id());
        $data = $account->validated();
        if ($data['password']) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        $user->save();
        return redirect()->route('myAccount')->with(['status' => 'Thay đổi thông tin thành công']);

    }

    public function myAccount()
    {
        $districts = District::query()->orderBy('name', 'asc')->get();
        $notifications = Notification::query()->where('sender_id', Auth::id())->get();
        $user = User::query()->where('id', Auth::id())->with(['district', 'ward', 'group'])->orderBy('created_at', 'desc')->first();

        $order = Order::query()->where('user_id', Auth::id())->get();
        return view('Client.my-account', [
            'user' => $user,
            'order' => $order,
            'data' => $districts,
            'notifications' => $notifications
        ]);
    }

}
