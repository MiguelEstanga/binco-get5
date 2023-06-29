<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>registert</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
	<x-menu/>

<div class="login-form">
	<form action="{{ route('register.post') }}" method="post" enctype="multipart/form-data"  >
		@csrf
		<div class="binco">
			Register Binco Mods
		</div>
		<div class="">
			<label class="form-label" for="name">username</label>
			<input class="form-control" type="text" name="name" id="name" >

			<label class="form-label" for="email">email</label>
			<input class="form-control" type="text" name="email" id="email" >
			<div>
				@error('email')
						<small style="color:#F1C40F;">
					*{{ $message }}
				</small>			
				@enderror
			</div>
		
		</div>
		<div class="">
			<label class="form-label " for="password">password</label>
			<input  class="form-control" type="text" name="password" id="password" >

			@error('password')
				<div style="color:#F1C40F;">
					*{{ $message }}
				</div>			
			@enderror

			<label class="form-label" for="password_confirme">

				password confime
					@error('confirme_password')
						<div style="color:#F1C40F;">
					*{{ $message }}
				</div>			
			@enderror
			</label>
			<input type="password" class="form-control" name="password_confirmation" id="password_confirme" >
		
		</div>
		<div class="" >
			<label  class="form-label" for="avatar">Avtar</label>
			<input type="file"  class="form-control" id="avatar" name="avatar" id="file">
		</div>
		<div>
			<span>
				  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

			</span>
			I agree to <span style="color:#F1C40F;font: 18px; font-weight: 900;"> Binco Mods privacy Policy</span> and <span style="color:#F1C40F;font: 18px; font-weight: 900;" > Terma of Use</span>
		</div>
		<div class="boton">
			<button class="btn btn-primary">
				log in 
			</button>
		</div>
		
	</form>
</div>
	<div class="difuminar">
		
	</div>
	
</body>
</html>



<style>
	body{
		background-image: url('https://i.blogs.es/6ae783/gta/1366_2000.jpeg');
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
	}
	.difuminar{
		   z-index: 0;
      position: absolute;
      top: 0;
      margin: 0;
      left: 0;
      width: 100%;
      height: 100%;
       box-shadow: 0px 0px 25px #222;
      backdrop-filter: blur(6px);
	}
	.login-form{
		position: relative;
		margin: 120px auto;
		width: 400px;
		height: 600px;
		background-color: #B3B6B7;
		z-index: 10;
		padding: 20px;
		padding-top: 60px;
	}
	.login-form .boton{
	
		margin: 20px 0;
	}

	.login-form .boton button{
		width: 100%;
		height: 50px;
		border: 5px;
		background-color: #F1C40F;
	}
	.login-form div label{
		color: #000;
		font-size: 20px;
		font-weight: 900;
	}

	

	.login-form .binco{
		position: absolute;
		top: 0;
		left: 0;
		height: 50px;
		width: 100%;
		background-color:#F1C40F ;
		color: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 20px;
		font-weight: 900;
	}

	
</style>