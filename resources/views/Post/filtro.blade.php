@extends('layauts.app')


@section('banerpublicidad')
	  <x-banerpublicidad/>
@endsection 
@section('banerhorizontal')
	     <x-banerhorizontal type="true" :categoria="$categorias->id" />       
@endsection
@section('subcategorias')
    <x-subcategoria  :categorias="$categorias" />
@endsection

@section('contenido')

	@foreach($categorias->posts as $post)
		<x-post-cart :post="$post"   />
	@endforeach
	
@endsection
