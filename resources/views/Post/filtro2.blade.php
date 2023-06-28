@extends('layauts.app')


@section('banerpublicidad')
	  <x-banerpublicidad/>
@endsection 

@section('banerhorizontal')
	     <x-banerhorizontal type="true" :categoria="$subcategorias->categoria->id" />       
@endsection
@section('subcategorias')
    <x-subcategoria  :categorias="$categorias" />
@endsection
@section('contenido')

	@foreach($subcategorias->posts as $post)
		<x-post-cart :post="$post"   />
	@endforeach
	
@endsection