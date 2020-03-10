@extends('Layout.plantilla')
@section('title','Home')

@section('header')
<section class="py-4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Top</h2>
					<div class="card">
						<div class="card-body">
							<div class="row">
								@foreach($movies as $movie)
									<div class="col-md-3">
										<a href="/movie/{{ $movie->id }}"><img src="{{ $movie->cover }}" alt="..."></a>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="py-4">
	<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Drama</h2>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>
								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>
								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>
								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>
							</div>
							<a href="#" class="btn btn-info my-2">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="py-4">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Ciencia Ficción</h2>
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>

								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>

								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>

								<div class="col-md-3">
									<img src="https://img.yts.lt/assets/images/movies/maleficent_mistress_of_evil_2019/medium-cover.jpg" alt="">
								</div>
							</div>
							<a href="#" class="btn btn-info my-2">Ver más</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
@endsection