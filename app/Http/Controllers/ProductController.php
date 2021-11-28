<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('show','showByCat');
    }
    function index(){
       
        $products = Product::get();
        return view('backend.Product.index',compact('products'));
    }


    function create(){
        $categories = Category::get();
        return view('backend.Product.create',compact('categories'));
    }
    function store(Request $request){
       
        
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'cprice'=>'required',
            'sprice'=>'required',
            'stock'=>'required',
        ]);

        $category = Category::find($request->category);
    
        $product = new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->cost_price=$request->cprice;
        $product->sell_price=$request->sprice;
        $product->stock=$request->stock;
        $category->products()->save($product);
        
        Toastr::success('Added New Product Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect('/products');
    }

    public function show(Request $request,$id){
        $categories= Category::get();
        $products=Product::get()->count();
        $product = Product::find($id);
        return view('product',compact('product','products','categories'));
    }
    public function showByCat(Request $request,$category){
        $products=Product::get()->where('category_id',$category);
        $categories=Category::get();
        return view('productsCat',compact('products','categories'));
    }

    function edit(Request $request,$id){
        $product = Product::find($id);
        $categories = Category::get();
        
        return view('backend.Product.edit',compact('product','categories'));
    }
    function update(Request $request,$id){
       
        $request->validate([
            'name'=>'required',
            'category'=>'required',
            'description'=>'required',
            'cprice'=>'required',
            'sprice'=>'required',
            'stock'=>'required',
        ]);

        Product::where('id',$id)
        ->update([
            'name'=>$request->name,
            'category_id'=>$request->category,
            'description'=>$request->description,
            'cost_price'=>$request->cprice,
            'sell_price'=>$request->sprice,
            'stock'=>$request->stock,
        ]);
        
        Toastr::success('Product updated Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect('/products');
    }
    function delete(Request $request,$id){
        Product::find($id)->delete();
        Toastr::success('Product deleted Succesfully ', 'Product', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}