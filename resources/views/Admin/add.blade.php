@extends('Layout.plantilladmin')
@section('title','Add')
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
		<div class="col-md-12 mb-3">
			<h1 class="text-center text-success"><b>ADD</b></h1>
		</div>
		<div class="col-12">
			<form action="{{route('admin.store')}}" method="post">
			@csrf
			<div class="col-md-6">
				<div class="mb-3">
					<label class="h3 p-2">Title Movie</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="mb-3">
					<label class="h3 p-2">Resume from Movie</label>
					<textarea name="resume" id="" class="form-control mb-2 p-2" style="resize: none;" cols="30" rows="5"></textarea>
				</div>
				<div class="mb-3">
					<label class="h3 p-2">Category</label>
					<select name="category" id="" class="form-control col-md-3 mb-2 p-2">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
				</div>
				<div class="mb-3">
					<label class="h3 p-2">Year</label>
					<input type="text" name="year" class="form-control">
				</div>
				<div class="mb-3">
					<label class="h3 p-2 mb-2">Link Cover</label>
					<input type="text" name="cover" class="form-control">
				</div>
				<div class="mb-3">
					<label class="h3 p-2">Link Trailer</label>
					<input type="text" name="trailer" class="form-control">
				</div>
			</div>
			<button type="submit" class="form-control btn btn-dark btn-outline-success float-right col-1">Add</button>
			</form>
		</div>
	</div>
</div>
@endsection