@extends('Layout.plantilla')
@section('title', 'Registro')

@section('header')
	<div class="container">
		<div class="row">
			<form method="post" action="{{ route('registro') }}">
				<div class="p-2"></div>
				<p class="p-0" style="font-size: 25px;"><b>Completar los datos que se indiquen</b></p>
				<div class="col-md-12 p-0">
				@csrf
					<!-- Registro de Correo -->
					<input type="hidden" name="name" value="123">
					<div class="form-group">
						<label style="font-size: 30px;"><b>Email address</b></label>
						<input type="email" name="email" class="form-control" placeholder="Ej: plablitoperez@perez.com">
						{!! $errors->first('email', '<small class="text-danger">:message</small><br>') !!}
					</div>

					<!-- Registro de Re-Correo -->
					<div class="form-group">
						<label style="font-size: 30px;"><b>Re-Email address</b></label>
						<input type="email" name="re-email" class="form-control" placeholder="Ej: plablitoperez@perez.com">
						{!! $errors->first('re-email', '<small class="text-danger">:message</small><br>') !!}
					</div>

					<!-- Registro de Password -->
					<div class="form-group">
						<label style="font-size: 30px;"><b>Password</b></label>
						<input type="password" name="password" class="form-control" placeholder="Ej: 123456789">
						{!! $errors->first('password', '<small class="text-danger">:message</small><br>') !!}
					</div>

					<!-- Registro de Re-Password -->
					<div class="form-group mb-4">
						<label style="font-size: 30px;"><b>Re-Password</b></label>
						<input type="password" name="re-password" class="form-control" placeholder="Ej: 123456789">
						{!! $errors->first('re-password', '<small class="text-danger">:message</small><br>') !!}
					</div>
				<button type="submit" class="col-4 btn btn-success btn-block" style="font-size: 20px; color: black;"><b>Send</b></button>
				</div>
			</form>
		</div>
	</div>
@endsection