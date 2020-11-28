@extends('layout.app')
@section('content')
<div class="page-heading">
    <h1 class="page-title">Dashboard</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item active">All Attendence</li>
    </ol>
</div>
@if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->any() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="page-content fade-in-up">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <div class="row">
                <h4 class="col-md-6">All Attendence</h4>
                <div class="col-md-6">
                    <a href="{{route('create.category')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Date</th>
                        <th>Aciton</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($attendence as $key=> $row)
                        <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$row->edit_date}}</td>
                        <td>
                            <a href="{{route('edit.attendence', $row->edit_date)}}" class="btn btn-danger">edit</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection