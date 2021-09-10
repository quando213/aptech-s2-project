<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Combo;
use Illuminate\Http\Request;

class ClientComboController extends Controller
{
    public function combo() {
        $combo = Combo::all();
        return view('Client.Shop-combo', ['list' => $combo]);
    }
}
