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
                                <a href="{{route('index.supplier')}}" class="btn btn-warning">All Suppliers</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover table-striped">
                            <tr>
                                <th>Name</th>
                                <td>{{$viewSupplier->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$viewSupplier->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$viewSupplier->phone}}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{$viewSupplier->address}}</td>
                            </tr>
                            <tr>
                                <th>City</th>
                                <td>{{$viewSupplier->city}}</td>
                            </tr>
                            <tr>
                                <th>Shop Name</th>
                                <td>{{$viewSupplier->shopName}}</td>
                            </tr>
                            <tr>
                                <th>Account Holder</th>
                                <td>{{$viewSupplier->accountHolder}}</td>
                            </tr>
                            <tr>
                                <th>Account Number</th>
                                <td>{{$viewSupplier->accountNumber}}</td>
                            </tr>
                            <tr>
                                <th>Bank Name</th>
                                <td>{{$viewSupplier->bankName}}</td>
                            </tr>
                            <tr>
                                <th>Bank Branch</th>
                                <td>{{$viewSupplier->bankBranch}}</td>
                            </tr>
                            <tr>
                                <th>Supplier Type</th>
                                <td>{{$viewSupplier->type}}</td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                    <img src="{{URL::to($viewSupplier->photo)}}" alt="" style="height: 80px; width:80px" >
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection