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
                       <a href='/customer' class="btn btn-primary">Add New Customer</a>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dasboard > Customer</a></li>
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
                            <h3 class="box-title">All Customers</h3>
                            <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Customer Name</th>
                                        <th class="border-top-0">Customer Address</th>
                                        <th class="border-top-0">Customer Phone</th>
                                        <th class="border-top-0">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach ($customers as $customer )
                                <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->address}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>
                                        <a class="btn btn-primary" href="{{route('cus.edit',$customer->id)}}">Edit</a>
                                        <a class="btn btn-danger" href="{{route('cus.del',$customer->id)}}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach    
                                </tbody>
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
            <footer class="footer text-center"> 2021 ?? All Rights Reserved <a
                    href="https://www.yetfix.com/">yetfix.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
@endsection
