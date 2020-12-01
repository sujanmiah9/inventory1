@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card shadow">
                    <div class="card-header cardB bg-light">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="text-dark">Add Employee</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('index.employee')}}" class="btn btn-primary btn-sm">All Employee</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('store.employee')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Employee Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label for="">Employee Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">Employee Phone</label>
                                <input type="text" name="phone" class="form-control">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Experiense</label>
                                    <input type="text" name="experiense" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">NID No</label>
                                    <input type="text" class="form-control" name="nid">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="">Salary</label>
                                    <input type="text" class="form-control" name="salary">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Vacation</label>
                                    <input type="text" class="form-control" name="vacation">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">City</label>
                                    <input type="text" class="form-control" name="city">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Upload Photo</label>
                                <input type="file" class="form-control" name="photo">
                            </div>
                            <div class="form-gorup">
                                <label for="">Address</label>
                                <textarea name="address" id="" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="text-right pt-2">
                                <input type="submit" value="Add" class="btn btn-primary btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
