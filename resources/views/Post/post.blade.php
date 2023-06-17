@extends('layauts.app')

 <x-categoria-baner/>
 

@section('banerpublicidad')
	  <x-banerpublicidad/>

@endsection 
@section('titulocontenido' , 'last uploaded')
@section("contenido")
	
	@foreach($posts as $post)
			<a style="text-decoration: none!important ;" href="{{ route('post.show' , $post->id) }}">	
				<div class="carta">
					<img src="https://i2.cdn.turner.com/money/dam/assets/130423094442-tesla-model-s-620xa.jpg" alt="{{ $post->post }}">
					<div class="data">
							<div class="calificacion">
								<span class="logo" >
									<img src="{{  	asset('img/calificacion.png') }}" alt="">
									6
								</span>	
							</div>
							<div class="descarga">
								<span class="logo" >
									<img src="{{  asset('img/descarga.png') }}" alt="">
									6
								</span>	
							</div>
					</div>
				</div>
				<div class="data" style="background: transparent;" >
						<p style="text-decoration: none!important " > titulo </p>
						<p style="text-decoration: none!important " >Nombre de usuario</p>
				</div>
			</a>
	@endforeach

@endsection

