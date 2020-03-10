@extends('Layout.plantilla')
@section('title', 'Movie')

@section('header')
    <div class="container py-4">
    	<div class="row">
    		<div class="col-md-6 text-center">
    			<img src="{{ $movie->cover }}" alt="" class="card-img-top">
    			<p class="py-2" style="font-size: 1.8em; text-shadow: 0 2px 5px rgba(0,0,0,0.26);">
    				<i class="fa fa-star text-warning" aria-hidden="true"></i>
    				<i class="fa fa-star text-secondary" aria-hidden="true"></i>
    				<i class="fa fa-star text-secondary" aria-hidden="true"></i>
    				<i class="fa fa-star text-secondary" aria-hidden="true"></i>
    				<i class="fa fa-star text-secondary" aria-hidden="true"></i>
    			</p>
    		</div>

    		<div class="col-md-6">
    			<h2>{{ $movie->name }}</h2>
    			<h3>{{ $movie->year }}</h3>
    			<p class="font-weight-bold"><em>Drama</em></p>
    			<p>
    				{{ $movie->resume }}
    			</p>

                <div>
                    <iframe width="560" height="315" src="{{ $movie->trailer }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
    		</div>
    	</div>
    </div>
@endsection