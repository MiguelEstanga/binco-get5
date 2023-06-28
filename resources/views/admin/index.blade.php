@extends('layauts.app')

<h2 style="margin-top:100px;" class="alert" > Administracion de post pendientes {{ Auth::user()->name }}</h2>
@section('contenido')
	
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<a href="{{ route( 'admin.show' , $post->id ) }} ">
				<x-post-cart :post="$post" />
			</a>
		@endforeach
	@endif
	@if(count($posts) == 0)
		<h2 class="alert" >No hay post pendientes</h2>
	@endif

	

@endsection


<style>
		.container{
			margin-top: 100px;
		}
</style>