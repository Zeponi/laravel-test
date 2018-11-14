@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a class="btn btn-primary" href="{{ route('add') }}"><i class="fa fa-address-card"></i> ADD PRODUCT </a>
                    <a class="btn btn-primary" href="{{ route('import') }}"><i class="fa fa-address-card"></i> IMPORT PRODUCT </a>
                    <hr>
                    <table class="table table-bordered" id="dataTable" width="100%" cellpadding="0">
                        <thead>
                            <tr>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Product Sub Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{ route('edit',$product->id) }}"><i class="fa fa-pencil"></i> Edit</a>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
