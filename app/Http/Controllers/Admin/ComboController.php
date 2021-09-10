<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ComboRequest;
use App\Models\Combo;
use App\Models\ComboDetail;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ComboController extends Controller
{

    public function index()
    {
        $data = Combo::query()->with(['comboDetail'])->orderBy('created_at','desc')->get();
        return view('Admin.Combo.list', [
            'title' => 'Trang các gói sản phẩm',
            'breadcrumb' => 'Hiển thị các gói sản phẩm',
            'data' => $data,

        ]);
    }
    public function create()
    {
        $product = Product::query()->orderBy('name', 'asc')->get();
        return view('Admin.Combo.form', [
            'title' => 'Trang thêm mới các gói sản phẩm',
            'breadcrumb' => 'Tạo mới các gói sản phẩm',
            'data' => null,
            'product' => $product,
            'combo_detail'=>null
        ]);
    }


    public function store(ComboRequest $request)
    {
        $combo = new Combo();
        $combo->fill($request->validated());
        $combo->save();
        foreach ($request->option as $product){

            $combo_detail = new ComboDetail();
            $combo_detail->product_id = $product['product_id'];
            $combo_detail->quantity = $product['quantity'];
            $combo_detail->combo_id = $combo->id;
            $combo_detail->save();
        }
        return redirect()->route('comboList')->with('message','Tạo mới thành công sản phẩm dùng '.$combo->name);

    }
    public function update($id)
    {
        $product = Product::query()->orderBy('name', 'asc')->get();
        $data = Combo::find($id);
        $combo_detail = ComboDetail::query()->where('combo_id',$id)->get();
        return view('Admin.Combo.form', [
            'title' => 'Combos',
            'breadcrumb' => 'Create Combo',
            'data' => $data,
            'combo_detail'=>$combo_detail,
            'product' => $product
        ]);
    }
    public function save(ComboRequest $request,$id)
    {
        $combo = Combo::find($id);
        $combo->update($request->validated());
        $combo->save();
        ComboDetail::query()->where('combo_id',$id)->delete();
        foreach ($request->option as $product){
            $combo_detail = new ComboDetail();
            $combo_detail->product_id = $product['product_id'];
            $combo_detail->quantity = $product['quantity'];
            $combo_detail->combo_id = $combo->id;
            $combo_detail->save();
        }
        return redirect()->route('comboList')->with('message','Sửa thành công sản phẩm dùng '.$combo->name);
    }
    public function destroy($id)
    {
        $combo = Combo::find($id);
        $combo->delete();
        ComboDetail::query()->where('combo_id',$id)->delete();
        return redirect()->route('comboList')->with('message','Xóa thành công sản phẩm dùng '.$combo->name);
    }
    public function detail()
    {
        $data = Combo::query()->with(['comboDetail'])->orderBy('created_at','desc')->get();
        return view('Admin.Combo.detail', [
            'title' => 'Combo Detail',
            'breadcrumb' => 'Combo Detail',
            'data' => $data,

        ]);
    }

}
