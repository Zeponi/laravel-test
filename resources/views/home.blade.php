@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a class="btn btn-primary" href="{{ route('add') }}"><i class="fa fa-address-card"></i> ADD PRODUCT </a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> IMPORT PRODUCT </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel"> UPLOAD CSV </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <div class="modal-body">
                        <form id="importacao" method="post" action="{{ route('import') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="file" name="csv" required>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button onclick="teste()" class="btn btn-primary"> UPLOAD </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CANCEL </button>
                    </div>
                </div>
            </div>
        </div>
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
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{ $product->id }}"> DELETE </button>
                        <!-- Modal -->
                        <div class="modal fade" id="{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">DELETE PRODUCT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            Are you sure want delete this item?
                        </div>
                        <div class="modal-footer">
                            <a href="{{ route('remove', $product->id) }}" type="button" class="btn btn-danger"> DELETE </a>
                            <button type="button" class="btn btn-default" data-dismiss="modal"> CANCEL </button>
                        </div>
                    </div>
                </div>
            </div>
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
