@extends('Layout.plantilla')
@section('title', 'Login')
@section('header')
<section>
	<div class="container py-3">
		<div class="row">
			<div class="col-5">
				@if(count($errors->all()))
				<div class="alert alert-danger" role="alert">
					<h4 class="alert-heading">Error:</h4>
					<ul class="alert-danger">
						@foreach($errors->all() as $error)
						<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-md-6 p-5">
			<form method="post" action="/login">
				@csrf
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-primary mb-2">Submit</button>
			</form>
			<div class="alert alert-dark" role="alert">
				<a href="/registro">Sign Up</a>. It’s quick and easy.
			</div>
		</div>
		<div class="col-1"></div>
		<div class="col-md-5">
			<p class="p-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium illo atque, nesciunt deserunt perspiciatis voluptate numquam voluptatibus beatae alias omnis. Nulla molestias ea voluptatem dignissimos animi voluptate eum ipsum neque.</p>
		</div>
	</div>
</div>
@endsection