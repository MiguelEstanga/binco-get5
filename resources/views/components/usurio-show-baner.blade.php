<div class="usuario-baner">
    
    <x-Avatar :post="$post"/>
    <div class="descarga">
           <form action="{{ route('post.descarga' , $post->id  ) }}"  >
                  @csrf
            <button >
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24"><path fill="white" d="M6 20q-.825 0-1.413-.588T4 18v-3h2v3h12v-3h2v3q0 .825-.588 1.413T18 20H6Zm6-4l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11l-5 5Z"/></svg>
                    </span>
                <span style="color: #fff;">
                      Download
                </span>
           </button>
        </form>
    </div>
    <x-reacciones :post="$post" />

    <div class="user-poster">
        <h2>
            
                        Mas Poster de {{ $post->user->name }} 
        </h2>

      
      
   
               @foreach($masposter as $post)
            <x-post-cart :post="$post" />
        @endforeach
    </div>

</div>

<style>
        .user-poster{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20;
            margin-top: 60px;
            
            padding-left: 3rem;
        }


    
        .avatar{
            width: 7rem;
            height: 7rem;
           
            border-radius: 50%;
            margin: auto;
        }
        .avatar img{
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .usuario-baner .email{
           
            text-align: center;    
            color: #DEBA29 ;
            font-size: 1rem;
            font-weight: 900;
        }

        .usuario-baner .descarga{
            
            display: flex;
            align-self: center;
            justify-content: center;
            margin-top: 2rem;
        }

        .usuario-baner .descarga button{
            width: 17rem;
            border-radius: 10px;
            border: none;
            background-color: #E67E22;
            font-size: 1.5rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        



</style>