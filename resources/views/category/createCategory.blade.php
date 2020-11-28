@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-8 offset-2">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Add Category</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('index.category')}}" class="btn btn-primary">All Category</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('store.category')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <input type="text" class="form-control" name="cat_name">
                            </div>
                            <div class="form-gorup">
                                <label for="">Description</label>
                                <textarea name="description" id="" cols="30" rows="3" class="form-control"></textarea>
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