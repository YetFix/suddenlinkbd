<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $products = Product::get();
        return view('backend.Sale.index',compact('products'));
    }


    function create(){
        $categories=Category::all();
        $products=Product::all();
        return view('backend.Sale.create',compact('products','categories'));
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required | unique:sales'
        ]);


        Sale::create([
            'name'=>$request->name
        ]);
        Toastr::success('Added New Sale Succesfully ', 'Sale', ["positionClass" => "toast-top-right"]);
        return redirect('/sales');
    }
    function edit(Request $request,$id){
        $sale = Sale::find($id);
        return view('backend.Sale.edit',compact('sale'));
    }
    function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
          
        ]);
        Sale::where('id',$id)
        ->update([
            'name'=>$request->name,
           
        ]);
        Toastr::success('Sale updated Succesfully ', 'Slider', ["positionClass" => "toast-top-right"]);
        return redirect('/sales');
    }
    function delete(Request $request,$id){
        Sale::find($id)->delete();
        Toastr::success('Sale deleted Succesfully ', 'Sale', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}