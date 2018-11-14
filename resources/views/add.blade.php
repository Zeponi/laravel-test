@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>

				<div class="panel-body">
					<form method="post" action="{{ route('save') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<button class="btn btn-primary" type="submit"> SAVE </button>
						<a class="btn btn-default" href="{{ route('home') }}"><i class="fa fa-address-card"></i> CANCEL </a>
						<hr>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Product name" required>
							</div>
							<div class="form-group">
								<select class="form-control" name="category" required>
									<option value="">Product sub name</option>
									@foreach($categorys as $category)
										<option value="{{ $category->id }}">{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
							<div class="form-group">
								<input type="number" name="price" class="form-control" placeholder="Price" required>
							</div>
							<div class="form-group">
								<textarea rows="5" name="description" class="form-control" placeholder="Description" required></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="file" name="imagem" class="form-control-file" required>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
