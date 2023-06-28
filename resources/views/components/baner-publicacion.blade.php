<div class="usuario-movil">
     <x-Avatar :post="$post"/>
    <x-reacciones :post="$post"/>
</div>

<div class="baner-publicacion" >
   
  
    <div class="imagen">
        
            <div class="galeria">
                
                @foreach($post->Imagenes as $imagen)
                  <div class="imagenes">
                    <img width="100%" height="100%" src="{{ Storage::url($imagen->imagenes) }}" alt="">
                  </div>
                 @endforeach
             
            </div>
            <div class="imagen-post">
                 <h2>{{ $post->titulo }}</h2>
                <img  width="100%" height="100%" src="{{ Storage::url($post->imagen) }}" alt="">
                 <div class="datapost">
           
                    <div class="fecha">
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
                      
                    </div>
                    <div class="categoria">
                             <span>{{ $post->categorias->categorias  }}</span>

                            <span>{{ $post->subcategorias->descripcion }}</span>
                    </div>
        
                </div>

                <div class="descripcion">
                        {{ $post->post }}
                </div>

                @if($admin == true)

                    <div class="formulario">

                          <form action="{{ route('admin.respuesta' , $post->id  ) }}" method="post">
                            @csrf
                            @method('put')
                            <select name="aprobacion"  class="form-control" id="">
                                <option value="">elija una opcion de aprobacion</option>
                                <option value="si"  style="color:#229954 ; " >Aprobar Post</option>
                                <option value="no" style="color:red " >Eliminar Post </option>
                            </select>
                            <div class="mb-3">

                               <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                               <textarea name="administracion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="mab-6">
                              <button class="btn btn-success">responder Post</button>
                            </div>
                          </form>
                      </div>

                @endif

                @if($admin == false)

                        <div class="comentarios">
                            
                                  @foreach($post->comentarios as $comentario)
                            
                                        <div class="banercomentario">
                                          <div class="avatar">
                                            <img 
                                                src="{{ Storage::url($post->user->avatar) }}" 
                                                alt="" 
                                                width="100%" height="100%">
                                          </div>
                                          <div  style="border:solid 1px rgba(0, 0, 0, .5); border-radius: 10px; padding: 10px; width: 100%; " class="comentarios-user">
                                            <div class="username" style="color:#E67E22;">
                                              {{ $comentario->username }}
                                            </div>
                                            
                                              <div  style="font-weight: 900;  ">
                                                {{ $comentario->comentario }}
                                              </div>
                                          </div>
                                        </div>
                                  
                                @endforeach
                                <form  action="{{ route('comentario.post') }}" method="post" >
                                    @csrf
                                    @auth
                                        <input  value="{{ $post->id }} "  name="post_id"  hidden  />
                                        <input  value="{{ Auth::user()->email }}"  name="email"  hidden  />
                                        <input  value="{{ Auth::user()->name }}"  name="username"  hidden  />
                                        <input  value="{{ Auth::user()->avatar }}"  name="avatar"  hidden  />
                                    @endauth
                                  
                                 
                                  <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Dejnos un comentario</label>
                                    <textarea class="form-control" name="comentario" rows="3"></textarea>
                                    @error("comentario")
                                        <small style="color:red" >
                                            *{{ $message }}
                                        </small>
                                    @enderror
                                  </div>
                                  <button class="btn btn-primary">Postera</button>
                                </form>
                          
                        </div>

                @endif        
            </div>

    </div>
   

    

</div>

<style>
    .baner-publicacion{
        width: 100%;
    }
    .comentarios{
        margin-top: 2rem;
        width: 100%;
        display: grid;
        gap: 20px;
        
    }

    .comentarios .banercomentario{
        display: flex;
        gap: 10px;

    }

   
    .baner-publicacion .descripcion{
        border: solid 1px rgba(0, 0, 0, .6);
        border-radius: 20px;
        padding: 10px;
        display: grid;

    }

    .comentarios .banercomentario .avatar{
        width: 7rem;
        height: 7rem;
        
        border-radius: 50%;
    }
    .baner-publicacion{
        max-width: 50rem;
        height: 200px;
        
       
        padding: 10px;
    }

    .imagen{
        width: 50rem;
        height:18.5rem;
        display: grid;
        grid-template-columns: 30% 70%;
        
        gap: 5px;
    }



    .imagen .imagen-post{
        height: 20.7rem;
        width: 37rem;
        
    }

    .imagen .imagen-post img{
        width: 100%;height: 100%;
    }
    .imagen  .galeria{
        
       
        width: 100%;
        display: grid;
        position: relative;
        top: 4.5rem;
        grid-template-rows: repeat(4, 1fr);
        
    }
    
  

    .imagen .galeria .imagenes{
        cursor: pointer;
        height: 80px;
        margin-bottom: 4px;
    }

      @media (max-width:1230px) {
        .imagen{
            grid-template-columns: repeat(1, 1fr);
            grid-template-rows:30% 60%;
          
            gap: 30px;
            width: 100vw;
            height: auto;
        }

        .imagen .imagen-post{
          
            height: 18.7rem;
            width: 49rem;
        }

        .imagen .galeria{
            display: flex;
            margin-bottom: 20px;
            width: 52%;
        }

        .imagen .galeria .imagenes{
            width: 100%;
            height: 100%;
            margin-right: 10px;

        }

        .datapost{

        }
    }

    @media (max-width:1140px) {
        .imagen .imagen-post{
            width: 100%;
        }
        .imagen .galeria{
            margin-bottom: 50px;
        }

    }
    .datapost{
       
        height: 1rem;
        display: flex;
        margin-top: 20px;
        margin-bottom: 20px;

    }

    .datapost div{
        width: 100%;
    }
    .datapost .categoria{
        display: flex;
     
        gap: 10px;
        margin-right: 10px;
       
        color: #fff;
        display: flex;
        justify-content: flex-end;
        align-items: center;

       
    }

    .datapost .categoria span{
        background-color: #000;
         border-radius: 10px;
         padding: 10px 10px;

    }

    .datapost .categoria span{
        display: flex;
        font-size: 10px;
    }

    .datapost .fecha {
      
        display: flex;
          justify-content: flex-start;
        align-items: center;
       
    }
    .datapost .fecha span svg{
        width: 30px;
        height: 30px;
      
    }

        .datapost .fecha span {
        font-size: 10px;
       
    }
    .usuario-movil{
        display: none;
    }
    @media (max-width:1136px) {
            .usuario-movil{
            margin: 0;
            
            width: 100vw;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: ceenter;
        }
    }
</style>