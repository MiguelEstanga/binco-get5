		@extends('layauts.app')
	<x-menu/>
	<x-banerhorizontal type="categoria" :categoria="$post->categorias->id" />

	<div class="contenido-show">
		<div class="coleccion">
			@for($i = 0 ; $i < 4 ; $i++)
				<div class="imagenes">
					<img src="http://i2.cdn.turner.com/money/dam/assets/130423094442-tesla-model-s-620xa.jpg" alt="">
				</div>
			@endfor
		</div>	
		<div class="body-data">
			<h2>{{ $post->titulo }}</h2>	
			<div class="imagen">
				<img src="{{ Storage::url($post->imagen) }}" alt="">
			</div>
			<div class="data-post">
				
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><g id="feCalendar0" fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g id="feCalendar1" fill="black"><path id="feCalendar2" d="M8 4h8V2h2v2h1a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1V2h2v2ZM5 8v12h14V8H5Zm2 3h2v2H7v-2Zm4 0h2v2h-2v-2Zm4 0h2v2h-2v-2Zm0 4h2v2h-2v-2Zm-4 0h2v2h-2v-2Zm-4 0h2v2H7v-2Z"/></g></g></svg>

					</span>
					<span>
						{{ $post->created_at }}
					</span>
					<span>
						<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="black" d="M6 20q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Zm6-4l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Z"/></svg>
					</span>
					<span>
						Descargas  ({{ $post->descarga }}) 
					</span>
				
				<div class="categoria">
					<span>{{ $post->categorias->categorias  }}</span>
					<span>{{ $post->subcategorias->descripcion }}</span>
				</div>
			</div>
				<div class="descripcion">
		{{ $post->post }}
	</div>
	
	@foreach($post->comentarios as $comentario)
	 <div class="comentarios">
		<div class="banercomentario">
			<div class="avatar">
				<img src="{{ Storage::url(  $comentario->avatar  )  }}" alt="">
			</div>
			<div class="comentarios-user">
				<div class="username">
					{{ $comentario->username }}
				</div>
					{{ $comentario->correo }}
				<div style="font-weight: 900;">
				{{ $comentario->comentario }}
				
			
			</div>
			</div>
			
		</div>


	</div>
	@endforeach
	
			<div class="formulario_comentario">
		<form action="{{ route('comentario.post') }}" method="post">
			@csrf
			@auth
				<input hidden type="text" name="username" value="{{ Auth::user()->name }}">
				<input hidden type="text" name="avatar" value="{{ Auth::user()->avatar }}">
				<input hidden type="text" name="email" value="{{ Auth::user()->email }}">
				<input hidden type="text" name="post_id" value="{{ $post->id }}">
			@endauth
			
			<div>
				<button class="btn " style="background-color: #F1C40F; width: 100%; height: 100%;">
				comentar
			</button>
			</div>
			<div class="form-floating">
  				<textarea name="comentario" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  				<label for="floatingTextarea">Comments</label>
			</div>
		
		</form>
	</div>
		</div>

        	<div class="usuario">
        			<div class="data-user">
        				<div class="avatar">
        					<img style="border-radius: 50%;"  width="100%" height="100%" src="{{ Storage::url(  $post->user->avatar  ) }}" />
        				</div>
        				<div class="correo">
        					<p >
        							{{ $post->user->email }}
        					</p>
        					
        				</div>
        			</div>
        			<div class="boton-descarga">
        				<form action="{{ route('post.descarga' , $post->id  ) }}"  >
        					@csrf
        					<button>
        						<span>
        							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="white" d="M6 20q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Zm6-4l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Z"/></svg>
        						</span>
        						<span style="color: #fff;">
        							
        							Download
        					
        						</span>
        					</button>
        				</form>
        		    </div>
        		    <div class="like">
        		        <div class="item">
        						({{ count($post->likes) }})
        						<form action="{{ route('like.add') }}" method="post">
        							@csrf
        							@auth
        								<input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
        								<input hidden type="text"  name="post_id" value="{{ $post->id }}">
        							@endauth
        						
        							<button style="border:none; background-color: transparent;">
        								<img src="{{  asset('img/post/Like.png') }}"  }}" alt="">
        							</button>
        
        							
        						</form>
				        </div>
        				<div class="item">
        						({{ count($post->dislikes) }})
        						<form action="{{ route('dislike.add') }}" method="post">
        								@csrf
        							@auth
        								<input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
        								<input hidden type="text"  name="post_id" value="{{ $post->id }}">
        							@endauth
        							<button style="border:none; background-color: transparent;">
        								<img src="{{  asset('img/post/Dislike.png') }}"  }}" alt="">
        							</button>
        
        							
        						</form>
        					
        				</div>
        				<div class="item">
        					({{ count($post->ilove) }})
        					<form action="{{ route('ilove.add')  }}" method="post">
        							@csrf
        							@auth
        								<input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
        								<input hidden type="text"  name="post_id" value="{{ $post->id }}">
        							@endauth
        							<button style="border:none; background-color: transparent;">
        								<img src="{{  asset('img/post/Meencanta.png') }}"  }}" alt="">
        							</button>
        						</form>
        				</div>
        		        
        		    </div>
        	</div>
		
	</div>

	<style>
		.contenido-show{
			
			width: 55%;
			margin: 100px auto;
			display: grid;
			height:100vh;
			gap: 10px;
			grid-template-columns: 20% auto 20%;
		
			
		}

		.coleccion{
		    height:300px;
			display: grid;
			position: relative;
			top: 40px;
		}
		.coleccion .imagenes{
			height: 100px;

		}


		.coleccion .imagenes img{
			width: 100%;height: 100%;
		}

		.body-data{
		
			height: 300px;
		}
		.body-data .imagen {
			
			height: 400px;
		}
		.body-data .imagen img{
			width: 100%;height: 100%;
		}

		.usuario{
			
			height: 400px;
			
			display:flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
		}

		.data-user .avatar{
			width: 150px;
			height: 150px;
			
			border-radius: 50%;
			margin: auto;
		}

		.data-user .correo p{
			font-size: 18px;
			font-weight: 900;
			text-align: center;
			font-family: cursive;
		}
	
		.boton-descarga{
			margin-top: 10px;
			width: 100%;
			height: 300px;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: auto;
		}

		.boton-descarga form{
			width: 100%;
			
		}

		.boton-descarga form button{
					color: #fff;
			font-size: 25px;
			font-weight: 900;
			padding: 10px;
			border: none;
			text-align: center;
			background-color:  #F1C40F;
			color: #fff;
			width: 280px;
			height: 80px;
			margin: auto;
			border-radius: 10px;
			cursor: pointer;
			display: flex;
			justify-content: center;
			align-items: center;
		}


		.like{
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100px;
			width: 100%;
			margin-top: 20px;
			gap: 20px;
			
		}

		.like .item{
			
			border-radius: 50%;
			height: 100px;
			width: 100px;
			display: grid;
			place-items: center;
		}

		.like .item img{
			width: 100%;height: 100%;
		}

		 .data-post{
			display: flex;
			margin-top: 20px;
			margin-bottom: 40px;
		}

		 .data-post div{
			display: flex;
			width: 100%;
			align-items: center;
		}

		.data-post .categoria{
			display: flex;
			justify-content: end;
			gap: 10px;
			align-items: center;
		}

		 .data-post .categoria span{
			background-color: black;
			border-radius: 20px;
			color: #fff;
			padding: 10px;
			font-size: 15px;
		}

		.descripcion{
			margin: auto;
			width: 38%;
			padding: 10px;
			font-size: 20px;
			font-weight: 100;
			font-size: cursive;
			text-align: justify;
			
		}

				.descripcion{
			margin: auto;
			width: 100%;
			padding: 10px;
			font-size: 20px;
			font-weight: 100;
			font-size: cursive;
			text-align: justify;
			
		}

		.comentarios{
			margin: auto;
			width: 100%;
			min-height: 150px;
		
			display: grid;
	
			align-items: center;
			gap: 10px;
			margin-top: 30px;
		
		}

		.comentarios .banercomentario{
			width: 100%;
			height: 100px;
		
			display: grid;
			grid-template-columns: 20% auto ;
		
			gap: 10px;
		}

		.comentarios .banercomentario .comentarios-user{
			width: 100%;
			height: 100%;
			border: solid 1px black;
			border-radius: 10px;
			padding: 20px;

		}

		.comentarios .banercomentario .comentarios-user .username{
			font-size: 25px;
			font-weight: 900;
			color: #F1C40F;
		}
		.comentarios .banercomentario .avatar{
			width: 100%;height: 100%;
			
		}

		.comentarios .banercomentario .avatar img{
			width: 100%;height: 100%;
			border-radius:50%;
			
		}

		.formulario_comentario{
			
			margin: 80px 0 300px 0;
			width: 100%;
			
		}

		.formulario_comentario form{
				display:grid;
				gap: 10px;
			grid-template-columns: 20% auto;
			
		
		}

	</style>

	