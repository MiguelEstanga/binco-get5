<div>
        <a style="text-decoration: none!important ;" href="{{ route('post.show' , $post->id) }}">   
                <div class="carta">

                   <img src="{{ Storage::url( $post->imagen) }}">
                    <div class="data">
                            <div class="calificacion">
                                <span class="logo" >
                                    <img src="{{    asset('img/calificacion.png') }}" alt="">
                                   
                                </span> 
                                <span>
                                    0
                                </span>
                            </div>
                            <div class="descarga">
                                <span class="logo"  >
                                    <img src="{{  asset('img/descarga.png') }}" alt="">
                                   
                                </span> 
                                <span>
                                     {{ $post->descarga }} 
                                </span>
                            </div>
                    </div>
                </div>
                <div class="data" style="background: transparent;" >
                  
                        <p style="text-decoration: none!important " > {{ $post->titulo }} </p>
                        <p style="text-decoration: none!important " > {{ $post->user->name }} </p>
                </div>
        </a>
</div>