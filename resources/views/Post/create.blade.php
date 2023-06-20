!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

	<title>crear post</title>
</head>
<body>
	<x-menu/>

		<form 
		action="{{ route('post.store') }}" 
		method="post"
		enctype="multipart/form-data" 
		
		>
		@csrf
		<div style="font-size: 30px;">
			Subir archivo
		</div>
		<div>
			<label class="form-label" for="archivo"> archivo </label>
			<input type="file"  class="form-control" id="archivo" name="archivo" >
		</div>
		<div>
			<label  class="form-label" for="imagen"> imagen </label>
			<input type="file" class="form-control" id="imagen" name="imagen" >
		</div>
		<div>
			<label for="post" class="form-label" >descripcion</label>
			<input type="text"  class="form-control" id="post" name="post" >
		</div>
		<div>
			<label for="titulo" class="form-label" >titulo</label>
			<input type="text" id="titulo" class="form-control" name="titulo">
		</div>
		<div>
			<label for="categoria">categoria</label>
			<select class="form-select" name="categoria" id="categoria">
				@foreach($categorias as $categoria)
					<option value="{{ $categoria->id }}">{{ $categoria->categorias }}</option>
				@endforeach	
			
		
			</select>
		</div>
		<div>
			<label for="subcategoria">subcategoria</label>
				<select  class="form-select"  name="subcategoria" id="subcategoria" disabled>
			</select>
		</div>
		<div>
		<input type="text" hidden name="user_id" value="{{ Auth::user()->id }}" >
		<button>
			<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><path fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22c-9 1-8-10 0-9C6 2 23 2 22 10c10-3 10 13 1 12m-12-4l5-4l5 4m-5-4v15"/></svg>
			upload
		</button>
		</div>
		
		
		
		
	</form>
	<x-footer/>
</body>
</html>

 <script type="text/javascript">
 	
 	categoria.addEventListener('change' , e => {
 			
 			 fetch(`selectSub/${e.target.value}`)
 			.then(res => res.json())
 			.then(res => {

 				res.forEach(data =>{
 					subcategoria.innerHTML +=`<option value=${data.id}>  ${data.descripcion }  <option/>`
 				})
 			
 			} )
 			.finally(res => {
 				subcategoria.disabled = false
 			})
 	})
 </script>	


<style>
	form{
		padding: 20px;
		width: 600px;
		box-shadow: 0 0 10px black;
		margin: 300px auto;
		display: grid;
		justify-content: center;
		align-items: center;
	}

	form div{
		margin-bottom: 20px;
		width: 100%;
		display: flex;
		justify-content: center;
		align-items: center;
		
	}
	form div label{
		margin: 0 20px;
	}
	form button{
		border: none;
		width: 100px;
		height: 50px;
		background-color: rgba(0, 0, 0, 1.0);
		color: #fff;
		cursor: pointer;
	}
</style>