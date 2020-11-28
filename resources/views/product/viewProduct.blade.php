@extends('layout.app')
@section('content')
    <div class="container pt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-purple text-white">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Details Information</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('index.product')}}" class="btn btn-warning">All Product</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>Product Name</th>
                                <td>{{$viewProduct->name}}</td>
                            </tr>
                            <tr>
                                <th>Category Name</th>
                                <td>{{$viewProduct->cat_name}}</td>
                            </tr>
                            <tr>
                                <th>Supplier Name</th>
                                <td>{{$viewProduct->sup_name}}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{$viewProduct->code}}</td>
                            </tr>
                            <tr>
                                <th>Product Garage</th>
                                <td>{{$viewProduct->garage}}</td>
                            </tr>
                            <tr>
                                <th>Product Route</th>
                                <td>{{$viewProduct->route}}</td>
                            </tr>
                            <tr>
                                <th>Buy Date</th>
                                <td>{{$viewProduct->buyDate}}</td>
                            </tr>
                            <tr>
                                <th>Expire Date</th>
                                <td>{{$viewProduct->expireDate}}</td>
                            </tr>
                            <tr>
                                <th>Buying Price</th>
                                <td>{{$viewProduct->buyPrice}}</td>
                            </tr>
                            <tr>
                                <th>Selling Price</th>
                                <td>{{$viewProduct->selPrice}}</td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                    <img src="{{URL::to($viewProduct->photo)}}" alt="" style="height: 80px; width:80px" >
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection