<x-menu/>
	<form action="{{ route('login') }}" method="post">
		@csrf
		<h2 style="text-align: center;">Login</h2>
		<div>
			<label for="email">Email</label>
			<input type="email"  placeholder="email" name="email" id="email">
		</div>
		<div>
			<label for="password">password</label>
			<input placeholder="password" type="password" name="password" id="password" >
		</div>
		<div  >
			
			<button>
				log in
			</button>
					</div>

		<a href="{{ route('register') }}">register</a>
			
		
	</form>


<x-footer/>

<style>
	form{
		width: 600px;
		height: 400px;
		box-shadow: 0 0 10px black;
		display: flex;
		flex-direction: column;
		margin: 300px auto;

	}
	form div{
		
		width: 100%;
		height: 100px;
		display: flex;
		justify-content: center;
		align-items: center;
		gap: 20px;
	}

	form div input{
		height: 50px;
		width: 300px;
		border: none;
		border-radius: 10px;
		padding:  0 0 0 10px;
		font-size: 20px;
		font-family: cursive;
		color: #ffff;
		background-color: #F1C40F;
		outline: none;
		box-shadow: 3px solid #ccc;
	}

		form div  label{
		font-size: 20px;
		font-weight: 0500;
		font-size: cursive;
	}

	form button	{
		margin: auto;
		width: 150px;
		height: 50px;
		font-size: 20px;
		border-radius: 10px;
		border-radius: 10px;
		background-color: #F1C40F;
		color: #fff;
		cursor: pointer;
	}

	form a{
		font-size: 25px;
		text-decoration: none;
		margin: auto;
		color: #000;
		cursor: pointer;
	}
</style>