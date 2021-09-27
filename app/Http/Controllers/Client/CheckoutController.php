<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout()
    {
        $districts = District::query()->orderBy('name')->get();
        $data = User::query()->where('id', Auth::user()->id)->with(['district', 'ward', 'group'])->first();
        $group = Group::query()->where('ward_id', $data->ward_id)->with('ward')->first();
        return view('.Client.checkout', [
            'districts' => $districts,
            'data' => $data,
            'group' => $group
        ]);
    }
}
