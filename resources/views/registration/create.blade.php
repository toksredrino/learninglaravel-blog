@extends ('layouts.master')

@section ('content')
	<div class="col-md-8">
		<h1>Register</h1>

		<form method="POST" action="/register">
			{{ csrf_field() }}
			<div class="form-group">
				<lable for="name"> Name:</lable>
				<input type="text" class="form-control" id="name" name="name" required>	
			</div>
			<div class="form-group">
				<lable for="name"> Email:</lable>
				<input type="email" class="form-control" id="email" name="email" required>	
			</div>

			<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" class="form-control" id="password" required>
			</div>

			<div class="form-group">
				<label for="password_confirmation">Password Confirmation:</label>
				<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Register</button>
			</div>

			@include('layouts.errors')
		</form>
	</div>
@endsection