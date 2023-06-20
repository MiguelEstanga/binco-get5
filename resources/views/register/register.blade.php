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
		<div class="">
			<label class="form-label" for="name">username</label>
			<input class="form-control" type="text" name="name" id="name" >

			<label class="form-label" for="email">email</label>
			<input class="form-control" type="text" name="email" id="email" >
		</div>
		<div class="">
			<label class="form-label " for="password">password</label>
			<input  class="form-control" type="text" name="password" id="password" >

			<label class="form-label" for="password_confirme">password confime</label>
			<input type="password" class="form-control" name="password_confirme" id="password_confirme" >
		</div>
		<div class="" >
			<label  class="form-label" for="avatar">Avtar</label>
			<input type="file"  class="form-control" id="avatar" name="avatar" id="file">
		</div>
		<div style="display: flex;  justify-content: center; align-items: center; ">
			<button class="btn btn-primary">
				log in 
			</button>
		</div>
		
	</form>
</div>

	<x-footer/>
</body>
</html>



<style>
	.login-form{
		
		margin: 120px auto;
		width: 700px;
		height: 500px;
	}

	
</style>