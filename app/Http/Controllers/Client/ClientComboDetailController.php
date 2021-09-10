<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Combo;
use Illuminate\Http\Request;

class ClientComboDetailController extends Controller
{
    public function detail($id) {
        $data = Combo::find($id);
        return view('Client/Shop-combo-detail', ['data' => $data]);
    }
}
