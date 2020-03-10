@extends('Layout.plantilladmin')
@section('title', 'Administrador - Marco')
@section('header')
<div class="container">
	<div class="row">
		<div class="col-md-12 p-3 m-1 text-center">
			<a href="{{route('admin.create')}}" class="btn btn-success" style="font-size: 25px;">Add</a>
			<a href="#" class="btn btn-info" style="font-size: 25px;">List</a>
			<a href="#" class="btn btn-danger">Cerrar Sesión</a>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body" style="background-color: #123;">
					<h1 class="text-center text-white">Movies on the Page</h1>
					<div class="row py-5 mx-2">
						@foreach($movies as $key)
						<div class="col-4 mb-3">
							<div class="card">
								<img src="{{$key->cover}}" alt="..." class="text-center card-img-top">
								<h1 class="text-center">{{$key->name}}</h1>
								<a href="{{route('admin.edit', $key->id)}}" class="btn btn-warning btn-lg font-weight-bold">Edit</a>
								<form action="{{route('admin.destroy', $key->id)}}" method="post" class="btn btn-danger btn-lg font-weight-bold">
									@csrf
									@method('delete')
									<button type="submit" class="btn btn-danger btn-lg font-weight-bold">Delete</button>
								</form>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection