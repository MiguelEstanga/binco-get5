	@extends('layauts.app')
	<x-menu/>
	<x-banerhorizontal/>
	
	<article class="contenido-show">
		<div class="titulo">
			<h2>
				Titulo del post
			</h2>
		</div>
		<div class="imgagen">
			<img src="https://i.blogs.es/383043/portada-gta-v-xbox-series-trucos/1366_2000.jpeg" alt="imgagen">
		</div>
		<div class="data-post">
			<div class="comentario">
				
			</div>
			<div class="categoria">
				<span>categoria</span>
				<span>subcategoria</span>
			</div>
		</div>


		<aside class="descarga" >
			<div class="usuario">
				<div class="imagen">
					<img src="" alt="">
				</div>
				usuario@usuario.com
			</div>
			<div class="boton-descarga">
				<form action="">
					<button>
						DOWLOAD
					</button>
				</form>
			</div>
			<div class="like">
				<div class="item">
					like
				</div>
				<div class="item">
					dont like
				</div>
				<div class="item">
					<3
				</div>
			</div>
		</aside>
	</article>
	<div class="descripcion">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime at minima, perferendis rerum atque doloremque voluptate dolorem tempore voluptatum quaerat nihil culpa, accusamus nemo. Recusandae quidem, quasi. Expedita, doloremque excepturi.
	</div>

	@for($i = 0 ; $i<10 ; $i++)
		<div class="comentarios">
		<div class="banercomentario">
			<div class="avatar">
				<img src="https://i.blogs.es/383043/portada-gta-v-xbox-series-trucos/1366_2000.jpeg" alt="">
			</div>
			<div class="comentarios-user">
				<div class="username">
					Nombre del Usuarrio
				</div>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam nihil dolorem molestiae optio magni at, laudantium hic nostrum inventore sapiente harum, necessitatibus. Est, qui necessitatibus sed magnam, eius non repellat! Lorem ipsum dolor sit amet consectetur adipisicing, elit. A beatae eos repellat sit, inventore voluptatum veritatis error quidem illum nisi nostrum similique quibusdam omnis fugit suscipit consequuntur laboriosam soluta, voluptas!
			</div>
		</div>
	</div>
	@endfor


	

	<style type="text/css">
		.contenido-show{
			margin: auto;
			width: 40%;
			height: 500px;
			position: relative;
			padding: 10px;
			display: grid;
			grid-template-rows: 10% 80% 10%;
			gap: 5px;

		}

		.contenido-show div{
			width: 100%;
			height: 100%;
			
		}

		.contenido-show  img{
			width: 100%;height: 100%;
		}
		.contenido-show .titulo h2{
			font-size: 30px;
			font-weight: 900;
			color: black;
		}

		.contenido-show .data-post{
			display: flex;

		}

		.contenido-show .data-post div{
			display: flex;
			
		}

		.contenido-show .data-post .categoria{
			display: flex;
			justify-content: end;
			gap: 10px;
			align-items: center;
		}

		.contenido-show .data-post .categoria span{
			background-color: black;
			border-radius: 20px;
			color: #fff;
			padding: 10px;
			font-size: 15px;
		}

		.descripcion{
			margin: auto;
			width: 1000px;
			padding: 10px;
			font-size: 20px;
			font-weight: 100;
			font-size: cursive;

		}

		.comentarios{
			margin: auto;
			width: 1000px;
			min-height: 200px;
			padding: 10px;
			display: grid;
			gap: 10px;
			margin-top: 40px;
		}

		.comentarios .banercomentario{
			width: 100%;
			height: 100px;
			
			display: grid;
			grid-template-columns: 20% 100% ;
			justify-content: center;
			align-items: center;
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
			
		}

		.descarga{
			
			width: 400px;
			height: 400px;

			position: absolute;
			right: -500px;
			top: 60px;
		}
		
		.descarga .usuario{
			width: 100%;
			height: 33%;
			
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			gap: 10px;
			font-size: 20px;
			font-weight: 900;
			color:  #F1C40F ;
		}

		.descarga .usuario .imagen{
			width: 150px;
			height: 150px;
			border-radius: 50%;
			
		}

		.descarga .boton-descarga{
			margin-top: 10px;
			width: 100%;
			height: 100px;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.descarga .boton-descarga button{
			color: #fff;
			font-size: 20px;
			font-weight: 900;
			padding: 10px;
			border: none;
			text-align: center;
			background-color:  #F1C40F;
			width: 150px;
			height: 50px;
			margin: auto;
		}

		.descarga .like{
			display: flex;
			align-items: center;
			justify-content: center;
			height: 50px;
			width: 100%;
			margin-top: 20px;
			gap: 20px;

		}

		.descarga .like .item{
			border: solid 1px black;
			border-radius: 50%;
			height: 100px;
			width: 100px;
			display: grid;
			place-items: center;
		}
	</style>