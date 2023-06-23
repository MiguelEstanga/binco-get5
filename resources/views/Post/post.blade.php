@extends('layauts.app')



 <x-banerhorizontal  :type="$type = false" categoria=""/>		
 <x-categoria-baner/>
 

@section('banerpublicidad')
	  <x-banerpublicidad/>
@endsection 

@section('titulocontenido' , 'last uploaded')

@section("contenido")
		
	@foreach($posts as $post)
		<x-post-cart :post="$post"   />
	@endforeach

@endsection

