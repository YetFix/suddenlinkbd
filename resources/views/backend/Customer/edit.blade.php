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
                       <a href='/customers' class="btn btn-primary">Back</a>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dasboard > Customer > update</a></li>
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
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Update Customer</h3>
                            <div class="table-responsive">
                            <table class="table text-nowrap">
                            <form action="{{route('cus.update',$customer->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" 
                                    name="name"
                                    placeholder="Enter category name"
                                    value="{{$customer->name}}"
                                     required>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Address</label>
                                    <input type="text" class="form-control" id="address" aria-describedby="emailHelp" 
                                    name="address"
                                    placeholder="Enter Customer  Address"
                                    value="{{$customer->address}}"
                                     required>
                                  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Customer Phone</label>
                                    <input type="text" class="form-control" id="phone" aria-describedby="emailHelp" 
                                    name="phone"
                                    placeholder="Enter Customer phone"
                                    value="{{$customer->phone}}"
                                     >
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                                </form>
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
            <footer class="footer text-center"> 2021 © ALl Rights Reserved. <a
                    href="https://www.yetfix.com/">yetfix.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
@endsection
