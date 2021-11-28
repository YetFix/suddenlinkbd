@extends('backend.master')

@section('x')
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper mt-5">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <a href='/products' class="btn btn-primary">Back</a>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dasboard > Product > Edit</a></li>
                    </ol>

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-sm-12 col-md-6 mx-auto">
                <div class="white-box">
                    <h3 class="box-title">Edit Category</h3>
                    <div class="table-responsive">
                        <table class="table text-nowrap">
                            <form action="{{route('pro.update',$product->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                               
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input type="text" class="form-control" id="name"
                                                aria-describedby="emailHelp" name="name"
                                                placeholder="Enter category name" value="{{$product->name}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Product Category</label>
                                            <select class="form-control" id="select" name="category" required>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}" @if($category->
                                                    id===$product->category_id)?
                                                    selected
                                                    @endif>{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Description</label>
                                            <input type="text" class="form-control" id="description"
                                                aria-describedby="emailHelp" name="description"
                                                placeholder="Enter product decription" value="{{$product->description}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Cost Price</label>
                                            <input type="number" class="form-control" id="cprice"
                                                aria-describedby="emailHelp" name="cprice"
                                                placeholder="Enter product cost price" value="{{$product->cost_price}}" required>
                                        </div> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Selling Price</label>
                                            <input type="number" class="form-control" id="sprice"
                                                aria-describedby="emailHelp" name="sprice"
                                                placeholder="Enter product selling price" value="{{$product->sell_price}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Product Stock Amount</label>
                                            <input type="text" class="form-control" id="stock"
                                                aria-describedby="emailHelp" name="stock"
                                                placeholder="Enter product stock" value="{{$product->stock}}" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right sidebar -->
        <!-- ============================================================== -->
        <!-- .right-sidebar -->
        <!-- ============================================================== -->
        <!-- End Right sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center"> 2021 © ALl Rights Reserved. <a href="https://www.yetfix.com/">yetfix.com</a>
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
@endsection