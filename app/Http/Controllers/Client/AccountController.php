<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAccountRequest;
use App\Models\District;
use App\Models\Group;
use App\Models\Notification;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function myAccount()
    {
        $districts = District::query()->orderBy('name', 'asc')->get();
        $notifications = Notification::query()->where('sender_id', Auth::id())->get();
        $user = User::query()->where('id', Auth::id())->with(['district', 'ward', 'group'])->first();
        $order = Order::query()->where('user_id', Auth::id())->orderBy('created_at', 'desc')->get();
        return view('Client.my-account', [
            'user' => $user,
            'order' => $order,
            'districts' => $districts,
            'notifications' => $notifications
        ]);
    }

    public function updateAccount(UpdateAccountRequest $account)
    {
        $user = User::find(Auth::id());
        $data = $account->validated();
        if ($data['password'] && Hash::check($data['password_current'], $user->password)) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        $user->save();
        return redirect()->route('myAccount')->with([
            'status' => 'Thay đổi thông tin thành công',
            'tab' => 'account'
        ]);
    }

    public function myOrderDetail($id,$notification = null)
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
}
