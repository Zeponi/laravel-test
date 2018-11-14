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
                                <td class="text-center">{{ $product->name }}</td>
                                <td class="text-center">{{ $product->category->name }}</td>
                                <td class="text-center">{{ $product->price }}</td>
                                <td class="text-center">
                                    <a class="btn btn-primary" href="{{ route('edit',$product->id) }}"><i class="fa fa-pencil"></i> EDIT </a>
                                    <a class="btn btn-danger" href="{{ route('remove',$product->id) }}"><i class="fa fa-pencil"></i> DELETE </a>
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
