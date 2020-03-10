@extends('Layout.plantilladmin')
@section('title', 'Administrador')

@section('header')
	<div class="container">
		<div class="row">
			<div class="col-md-5 p-2 m-2">
				<form method="post" action="/login">
				@csrf

					<!-- Llenar Correo -->
				<div class="form-group">
					<label style="font-size: 30px;"><b>Email address</b></label>
						<input type="email" name="email" class="form-control">
				</div>

					<!-- Llenar Password -->
				<div class="form-group">
					<label style="font-size: 30px;"><b>Password</b></label>
					<input type="password" name="password" class="form-control">
				</div>

				<button type="submit" class="btn btn-success btn-block" style="font-size: 20px; color: black;"><b>Login</b></button>
				</form>
			</div>
		</div>
	</div>
@endsection