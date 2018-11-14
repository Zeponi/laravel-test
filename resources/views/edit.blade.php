@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<form method="post" action="{{ route('update', $product->id) }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden"  name="_method" value="put">
						<button class="btn btn-primary" type="submit"> UPDATE </button>
						<a class="btn btn-default" href="{{ route('home') }}"><i class="fa fa-address-card"></i> CANCEL </a>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{ $product->id }}"> DELETE </button>
						<a class="btn btn-primary" style="margin-left: 70px;" href="{{ route('site') }}"> PREVIEW </a>
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
						<hr>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" value="{{ $product->name }}" name="name" class="form-control" placeholder="Product name" required>
							</div>
							<div class="form-group">
								<select class="form-control" name="category" required>
									@foreach($categorys as $category)
										<option {{ $category->name == $product->category ? 'checked' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<input type="number" value="{{ $product->price }}" name="price" class="form-control" placeholder="Price" required>
							</div>
							<div class="form-group">
								<textarea rows="5" name="description" class="form-control" placeholder="Description" required>{{ $product->description }}</textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="file" name="imagem" class="form-control-file">
							</div>
							<div class="form-group">
								<img width="83px" src="{{ asset($product->image) }}">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
