@extends('master')

@section('content')
	<div class="row">
		<div class="col-md-12">
			@if($errors->all())
				<div class="alert alert-danger">
					<h3>Oops!</h3>
					<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form method="POST" action="{{ url('/tasks') }}">
				{{ csrf_field() }}
				<div class="form-group">
					<label>Task Name</label>
					<input type="text" value="{{ old('name') }}" name="name" class="form-control" />
				</div>
				<div class="form-group">
					<label>Task Description</label>
					<textarea name="description" class="form-control">{{ old('description') }}</textarea>
				</div>
				<div class="form-group">
					<a href="{{ url('/tasks') }}" class="btn btn-warning">Back</a>
					<button type="submit" class="btn btn-primary">
						Create Task
					</button>
				</div>
			</form>
		</div>
	</div>
@stop