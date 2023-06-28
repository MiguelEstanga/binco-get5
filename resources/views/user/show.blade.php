@extends('layauts.app')

@section('contenido')
	<form action="{{ route( 'user.put' , $user->id ) }}" method="post" enctype="multipart/form-data">
		@csrf
		@method("put")
		<div class="control mb3">
			<label for="nombre-control" class="form-label" > username </label>
			
				<input type="text"  class="form-control"  id="nombre-control" value="{{$user->name }}" name="name"/ >
			
		</div>
		<div class="control mb3">
			<label for="email-control" class="form-label"> email </label>
			
				<input type="text" class="form-control"  id="email-control" value="{{ $user->email }}" name="email" /  >
			
		</div>
		<div class="control mb3">
			<label  class="form-label avatar"    for="avatar-control">
				<img  src="{{ Storage::url($user->avatar) }}" alt="avatar">
			</label>
			<input type="file" name="avatar" id="avatar-control" class="form-control" value="{{ $user->avatar }}" />
			
		</div>
		<button class="btn btn-primary" >Apdated</button>
	</form>
@endsection

<style>
	form{		
		margin: 100px auto;	
	}
	form .control .avatar{
		height: 5rem;
	} 
	form .control{
		margin-top: 10px;
	}
	form  .control label img{
		width: 100%;
		height: 100%;
	}

	
</style>


