@extends('layauts.app')
  <x-banerhorizontal type="true" :categoria="$post->categorias->id" />     
<div class="publicacion">
	    
       
      <div class="container">
            <x-baner-publicacion :admin="true" :post="$post" />            
      </div> 

   

  </div>
  <div>
    
  </div>



<style>
	.publicacion{
	 display: grid;
   grid-template-columns: repeat(2,1fr);
	 width: 100%;
		height: auto;
    gap: 30px;
		margin: 100px auto;

	}

  .publicacion .formulario{
    margin-top: 3.5rem;
    
  }

  @media (max-width:1150px) {
    .publicacion{
      grid-template-columns: repeat(1, 1fr);
      grid-template-rows: repeat(2, 1fr);
    }
  }

</style>