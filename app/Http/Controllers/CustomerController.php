<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index(){
        $customers = Customer::get();
        return view('backend.Customer.index',compact('customers'));
    }
    function create(){
        return view('backend.Customer.create');
    }
    function store(Request $request){
        $request->validate([
            'name'=>'required | unique:customers',
            'address'=>'required',
            'phone'=>'required'
        ]);
        Customer::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone
        ]);
        Toastr::success('Added New Customer Succesfully ', 'Customer', ["positionClass" => "toast-top-right"]);
        return redirect('/customers');
    }
    function edit(Request $request,$id){
        $customer=Customer::find($id);
        return view('backend.Customer.edit',compact('customer'));
    }
    function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
          
        ]);
        Customer::where('id',$id)
        ->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'phone'=>$request->phone,
        ]);
        Toastr::success('Customer updated Succesfully ', 'Customer', ["positionClass" => "toast-top-right"]);
        return redirect('/customers');
    }
    function delete(Request $request,$id){
        Customer::find($id)->delete();
        Toastr::success('Customer deleted Succesfully ', 'Customer', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}