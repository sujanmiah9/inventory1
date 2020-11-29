@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row pt-3">
            <div class="col-md-8 offset-2">
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
                    <div class="card-header bgView">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Update Expense</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('daily.expense')}}" class="btn btn-light btn-sm">Yearly Expense</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.yearexpense',$yearEdit->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Details</label>
                                <textarea name="detail" id="" cols="30" rows="3" class="form-control">{{$yearEdit->detail}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Amount</label>
                                <input type="text" class="form-control" name="amount" value="{{$yearEdit->amount}}">
                            </div>
                                <input type="hidden" name="date" value="{{date('d/m/y')}}">
                                <input type="hidden" name="month" value="{{date('F')}}">
                                <input type="hidden" name="year" value="{{date('Y')}}">
                            <div class="text-right pt-2">
                                <input type="submit" value="Update" class="btn btn-primary btn-block btn-lg">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection