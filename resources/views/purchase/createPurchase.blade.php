@extends('layout.app')

@section('content')
    <div class="pt-5">
        <form action="">
            {{-- first --}}
            <div class="card cardP mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Supplier Name</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Sujan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Category Name</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Sujan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="">Purchase Date</label>
                                <input type="date" name="" id="" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- secound Left --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="card cardL">
                        <div class="card-body">
                            <h5>Available Stock Product</h5>
                            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Product Code</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Photo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>fsf</td>
                                        <td>fsd</td>
                                        <td>fs</td>
                                        <td>fs</td>
                                        <td>fsd</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card cardR">
                        <div class="card-body">
                            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Customer Name</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>fsf</td>
                                        <td>fsd</td>
                                        <td>fs</td>
                                        <td>fs</td>
                                        <td>fsd</td>
                                        <td>fs</td>
                                        <td>fs</td>
                                    </tr> 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection