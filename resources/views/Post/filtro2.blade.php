@extends('layauts.app')


@section('banerpublicidad')
	  <x-banerpublicidad/>
@endsection 

@section('titulocontenido' )
	{{ $subcategorias->descripcion }}
@endsection
@section('contenido')

	@foreach($subcategorias->posts as $post)
		<x-post-cart :post="$post"   />
	@endforeach
	
@endsection