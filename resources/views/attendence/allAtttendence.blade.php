@extends('layout.app')
@section('content')
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
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">All Attendence</li>
        </ol>
    </nav>
    <div class="card shadow">
        <div class="card-header cardB bg-light">
            <div class="row">
                <h4 class="col-md-6">All Attendence</h4>
                <div class="col-md-6">
                    <a href="{{route('daily.attendence')}}" class="btn btn-primary btn-sm float-right"><i class="fa fa-plus"></i> Add</a>
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
                            <a href="{{route('edit.attendence', $row->edit_date)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
