@extends('layout.app')
@section('content')
<div class="page-content fade-in-up">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">All Supplier</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header bgView">
            <div class="row">
                <h4 class="col-md-6">All Supplier</h4>
                <div class="col-md-6">
                    <a href="{{route('create.supplier')}}" class="btn btn-light btn-sm float-right"><i class="fa fa-plus"></i> Add</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Photo</th>
                        <th>Aciton</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sr</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Photo</th>
                        <th>Aciton</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($suppliers as $key=> $row)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$row->sup_name}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->address}}</td>
                            <td>{{$row->salary}}</td>
                            <td>
                                <img src="{{URL::to($row->photo)}}" style="height: 80px; width:80px" alt="">
                            </td>
                            <td>
                                <a href="{{route('edit.supplier',$row->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                <a href="{{route('delete.supplier',$row->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                <a href="{{route('view.supplier',$row->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
