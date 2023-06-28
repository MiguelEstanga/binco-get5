@extends('layauts.app')

<div class="informacion">
    <div class="data configuracion "   >
      <div class="contador">
         <p>config</p>
      </div>
      <div class="img">
                <a href="{{ route('user.show' , Auth::user()->id ) }}">
        
      
      <svg xmlns="http://www.w3.org/2000/svg" width="60" height="50" viewBox="0 0 24 24"><path fill="none" stroke="black" stroke-width="2" d="M16 15c4.009-.065 7-3.033 7-7c0-3.012-.997-2.015-2-1c-.991.98-3 3-3 3l-4-4s2.02-2.009 3-3c1.015-1.003 1.015-2-1-2c-3.967 0-6.947 2.991-7 7c.042.976 0 3 0 3c-1.885 1.897-4.34 4.353-6 6c-2.932 2.944 1.056 6.932 4 4c1.65-1.662 4.113-4.125 6-6c0 0 2.024-.042 3 0Z"/></svg>
      </a>

      </div>
       
    </div>
    <div class="data">
        <div class="contador">
             <p>{{ count(Auth::user()->post) }}</p>

        </div>
        <div class="img" style="display: flex; justify-content:center; align-items: center; margin-bottom:12px ;  ">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="50" viewBox="0 0 16 16"><path fill="black" d="M15 4V3H9c0-1.69 1-2 1-2V0H5v1s1 .31 1 2H0v12h2v1h14V4h-1zm-1 10H1V4h4v1h2v2h1V5h2V4h4v10z"/></svg>

        </div>
         <p>publicaciones</p>
      </div>

    <div class="data">
        <div class="contador">
             {{ $dislike }}
        </div>
        <div class="img" >
              <img src="{{  asset('img/post/Dislike.png') }}"  }}" alt="">
        </div>
        <p>dislikes</p>
       
    </div>
    <div class="data">
          <div class="contador">
              {{ $ilove }}
        </div>
        <div class="img" >
             <img src="{{  asset('img/post/Meencanta.png') }}"  }}" alt="">
        </div>
        <p>ilove</p>
      
    </div>
    <div class="data">
      <div class="contador">
              {{ $likes }}
        </div>
        <div class="img">
             <img src="{{  asset('img/post/Like.png') }}"  }}" alt="">
        </div>
        <p>likes</p>
    </div>
    <div class="data">
      <div class="contador">
              {{ $descarga }}
        </div>
        <div class="img">
               <img src="{{  asset('img/descarga.png') }}" alt="descarga">
        </div>
        <p>descarga</p>
    </div>
    
</div>
@if(session('post'))
  <div class="alert alert-success">{{ session('post')  }}</div>
@endif
<h2 class="alert" > Mis post </h2>
@section('contenido')
  @foreach(Auth::user()->post as $post)
    <a href="{{ route('post.show' , $post->id ) }}">
      <x-post-cart :post="$post" />
     </a> 
  @endforeach
@endsection

<style>
  .informacion{
    width: 70%;
    height: 100px;
    margin: auto;
    margin-top: 100px;
    margin-bottom: 50px;
    display: flex;
    
    width: 100%;

    gap: 10px;
    justify-content: center;
    align-items: center;

  }


  .informacion .data{
    display: grid;
    grid-template-rows: repeat(2, 1fr);
    width: 5rem;
    margin-left: 10px;

    height: 100%;
  }

   .informacion .data{
    
  }
  .informacion .data p{
   
    text-align: center;
  }

  .informacion .data .contador{
    text-align: center;
  }
  .informacion .data .img img{
    width: 100%;height: 100%;
  }







</style>