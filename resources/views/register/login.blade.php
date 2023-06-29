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
	<form action="{{ route('login') }}" method="post" enctype="multipart/form-data"  >
		@csrf
		<div class="binco">
			Register Binco Mods
		</div>
		<div class="">
			<label class="form-label" for="name">email</label>
			<input class="form-control" type="text" name="email" id="name" >
			<div>
				@error('email')
						<small style="color:#F1C40F;">
					*{{ $message }}
				</small>			
				@enderror
			</div>
		
			<label class="form-label" for="email">password</label>
			<input class="form-control" type="text" name="password" id="email" >
			<div>
				@error('psssword')
						<small style="color:#F1C40F;">
					*{{ $message }}
				</small>			
				@enderror
			</div>
		
		</div>
		
	
	
		<div class="boton">
			<button class="btn btn-primary">
				log in 
			</button>
		</div>

		<div>
			<a href="{{ route('register') }}"  style="color:#F1C40F; font-weight: 900; font-size: 20px;"  >register</a>
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
		width: 600px;
		height: 350px;
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