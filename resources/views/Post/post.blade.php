@extends('layauts.app')

 

@section('banerhorizontal') 
  <x-banerhorizontal  :type="$type = false" categoria=""/>        
@endsection

@section('categorias')
	 <x-categoria-baner/>
@endsection

@section('publicidad')
	  <x-banerpublicidad/>
@endsection
@section("contenido")

	
	@foreach($posts as $post)
			<a href="{{ route('post.show' , $post->id) }}">
					<x-post-cart :post="$post" />
			</a>
		
	@endforeach

@endsection
	
@section("paginate")
	{{ $posts->links() }}
@endsection

<style>
	
</style>