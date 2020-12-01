@extends('layout.app')
@section('content')
<div class="container pt-3">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card shadow">
                <div class="card-header bg-light cardB">
                    <div class="row">
                        <div class="col-md-6">User Profile</div>
                        <div class="col-md-6">
                            <a href="{{ route('dashboard') }}" class=" btn btn-sm btn-primary float-right">Back</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset('/'.auth()->user()->photo)}}" style="height:150px; width:150px;" alt="">
                    </div>
                </div>
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>Name</th>
                        <td>{{auth()->user()->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{auth()->user()->email}}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{auth()->user()->address}}</td>
                    </tr>
                    <tr>
                        <th>Contact Number</th>
                        <td>{{auth()->user()->contactNumber}}</td>
                    </tr>
                    <tr>
                        <th>Gender</th>
                        <td>{{auth()->user()->gender}}</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
