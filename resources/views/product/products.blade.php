@extends('master')
@section('title')
    Products
@endsection
@section('content')
{{--    <h1 class="text-center text-success">This is Products page</h1>--}}
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center fw-bolder">All Products</h3>
                    <hr>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="assets/image/Sheikh-Hasina-300x284.png" alt="" class="card-img-top" style="height: 250px"/>
                                <div class="card-body">
                                    <h2>Product Name</h2>
                                    <p>Price: 2000tk</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="float-end btn btn-outline-primary rounded-0">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="assets/image/bongobondu.jfif" alt="" class="card-img-top" style="height: 250px"/>
                                <div class="card-body">
                                    <h2>Product Name</h2>
                                    <p>Price: 2000tk</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="float-end btn btn-outline-primary rounded-0">View</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="assets/image/Bangabandhu1.jpg" alt="" class="card-img-top" style="height: 250px"/>
                                <div class="card-body">
                                    <h2>Product Name</h2>
                                    <p>Price: 2000tk</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="float-end btn btn-outline-primary rounded-0">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
