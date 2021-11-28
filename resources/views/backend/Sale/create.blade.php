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
                <a href='/sales' class="btn btn-primary">Back</a>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="#" class="fw-normal">Dasboard > Sale > Create</a></li>
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
           
                <div class="white-box col-md-6">
                     <div class="table-responsive">
                        <table class="table text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Name</th>

                                    <th class="border-top-0">Selling Price</th>
                                 
                                    <th class="border-top-0">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($i=1)
                                @foreach ($products as $product )
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->sell_price}}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{route('pro.del',$product->id)}}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class=" align-self-center btn btn-lg btn-warning">Pay</button>
                    </div>
                </div>
        
           
                <div class="white-box col-md-6 ml-1">
                    <h3 class="box-title">All Products</h3>
                 
                      <div class="row">
                      @foreach($products as $product)
                          <div class="col-md-4">
                          <form action="{{route('cat.store')}}" method="POST" class="d-flex flex-column p-4 justify-content-center align-items-center border">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">{{$product->name}}</label><br>
                                    <label for="exampleInputEmail1"><span>Price: </span> {{$product->sell_price}}</label>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                </button>
                            </form>
                          </div>
                          @endforeach
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