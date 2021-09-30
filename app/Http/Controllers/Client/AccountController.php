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
        $notifications = Auth::user()->notifications;
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

    public function myOrderDetail($id)
    {
        $order = Order::query()->where(['id' => $id, 'user_id' => Auth::id()])->firstOrFail();
        return view('Client.my-order-detail', [
            'order' => $order
        ]);
    }

    public function notifications()
    {
        return redirect()->route('myAccount')->with(['tab' => 'notifications']);
    }

    public function readNotifications()
    {
        $notifications = Notification::query()->where(['user_id' => Auth::id(), 'is_seen' => false])->get();
        foreach ($notifications as $notification) {
            $notification->is_seen = true;
            $notification->save();
        }
    }
}
