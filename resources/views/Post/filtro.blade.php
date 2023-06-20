@extends('layauts.app')


@section('banerpublicidad')
	  <x-banerpublicidad/>
@endsection 
@section('titulocontenido' )
	{{ $categorias->categorias }}
@endsection
<div>
    <div class="baner-categoria">
      
         @foreach($categorias->subcategorias as $sub)

         	<a href="{{ route('subcategorias.busqueda' , $sub->id ) }}"> {{ $sub->descripcion }} </a>
         @endforeach
     
    </div>
 </div>
@section('contenido')

	@foreach($categorias->posts as $post)
		<x-post-cart :post="$post"   />
	@endforeach
	
@endsection

<style type="text/css">
    .baner-categoria{
        width: 150px;
        z-index: 2;
        height: 600px;
        position: absolute;
        left: 100px;
        top: 400px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 40px;
        padding: 10px;
      
        
    }
    .baner-categoria .categoria{
       display: grid;
        width: 150px;  
        height: 40px;
       display: flex;
       gap: 10px;

        cursor: pointer;
    
    }

    .baner-categoria  a{
    	text-decoration: none;
    	font-size: 25px;
    	font-weight: 100;
    	font-family: cursive;
    	color: #000;

    }

    .baner-categoria  a:hover{
    	text-decoration: underline;
    }

   
    


</style>