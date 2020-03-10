@extends('Layout.plantilladmin')
@section('title','Edit')
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
			<h1 class="text-center text-warning"><b>EDIT</b></h1>
		</div>
		<div class="col-12">
			<form action="{{route('admin.update', $edit->id)}}" method="post">
				@csrf
				@method('put')
				<div class="card float-right">
					<img src="{{$edit->cover}}" alt="..." class="card-img-top">
				</div>
				<div class="col-md-6">
					<div class="mb-3">
						<label class="p-2 h3">Movie</label>
						<input type="text" name="name"  class="form-control" value="{{$edit->name}}">
					</div>
					<div class="mb-3">
						<label class="h3 p-2">Resume from Movie</label>
						<textarea name="resume" id="" class="form-control mb-2 p-2" style="resize: none;" cols="30" rows="5">{{$edit->resume}}</textarea>
					</div>
					<div class="p-2 mb-3">
						<label>Category</label>
						<select name="category" id="" class="form-control col-md-3 mb-2 p-2">
							<option value="{{$edit->category}}">1</option>
							<option value="{{$edit->category}}">2</option>
							<option value="{{$edit->category}}">3</option>
							<option value="{{$edit->category}}">4</option>
							<option value="{{$edit->category}}">5</option>
						</select>
					</div>
					<div class="mb-3">
						<label class="h3 p-2">Year</label>
						<input type="text"name="year" class="form-control" value="{{$edit->year}}">
					</div>
					<div class="mb-3">
						<label class="h3 p-2 mb-2">Link Cover</label>
						<input type="text"name="cover" class="form-control" value="{{$edit->cover}}">
					</div>
					<div class="mb-3">
						<label class="h3 p-2">Link Trailer</label>
						<input type="text" name="trailer" class="form-control" value="{{$edit->trailer}}">
					</div>
				</div>
				<button type="submit" class="form-control btn btn-outline-success float-right col-1 p-2 m-2">Edit</button>
			</form>
		</div>
	</div>
</div>
</div>
@endsection