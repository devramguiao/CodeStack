<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ToDos | Login</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-6 mx-auto">
				<h3>Please Sign In</h3>
				<p>Enter your credentials</p>
	
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

				@if(session('failed_login'))
					<div class="alert alert-danger">
						<h3>Oops!</h3>
						<p>
							{{ session('failed_login') }}
						</p>
					</div>
				@endif

				<form action="{{ url('login') }}" method="POST">
					{{ csrf_field() }}

					<div class="form-group">
						<label>Username:</label>
						<input type="text" name="username" class="form-control" />
					</div>

					<div class="form-group">
						<label>Password:</label>
						<input type="password" name="password" class="form-control" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Sign In</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>