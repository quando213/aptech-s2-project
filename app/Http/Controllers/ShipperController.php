<?php

namespace App\Http\Controllers;

use App\Enums\UserRole;
use App\Models\Group;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class ShipperController extends Controller
{
    public function index()
    {
        return view('.Shipper.page-content');
    }
    public function notification()
    {
        $notifications = Notification::query()->where('sender_id',Auth::id())->orderBy('created_at','desc')->get();
        return view('.Shipper.notification',[
            'title' => 'Trang thông báo',
            'breadcrumb' => 'Hiện thị thông báo',
            'notifications'=>$notifications
        ]);
    }


    public function list()
    {
        $user = User::find(Auth::id());
        $group = Group::find($user->group_id);
        $data = Order::query()->where('shipping_ward_id',$group->ward_id )->with(['district', 'ward', 'user'])->orderBy('created_at', 'desc')->get();
        return view('Shipper.list', [
            'data' => $data,
            'title' => 'Trang đơn hàng',
            'breadcrumb' => 'Hiện thị đơn hàng'
        ]);
    }
    public function detail($id){
        $order = Order::query()->where('id',$id)->with(['district','ward','user'])->orderBy('created_at','desc')->first();
        $groupShipper = Group::query()->where('ward_id',$order->shipping_ward_id)->first();
        if ($groupShipper){
            $shippers = User::query()->where(['group_id'=>$groupShipper->id,'role'=>UserRole::Shipper])->get();
        }
        else{
            $shippers = null;
        }
        $orderDetails = OrderDetail::query()->where(['order_id'=>$id,'created_at'=>$order->created_at])->with(['product'])->get();
        return view('.Shipper.detail',[
            'shippers'=>$shippers,
            'title'=>'Trang chi tiết đơn hàng',
            'breadcrumb'=>'Hiện thị chi tiết đơn hàng',
            'orderDetails'=>$orderDetails,
            'order'=>$order
        ]);
    }

}
