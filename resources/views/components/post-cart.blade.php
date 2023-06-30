<div class="carta-box">
       
                <div class="carta">

                    <img src="{{ Storage::url( $post->imagen) }}">
                    <div class="data">
                            <div class="calificacion">
                                <span class="logo" >
                                    <img src="{{  asset('img/post/Like.png') }}"  }}" alt="">

                                   
                                </span> 
                                <span>
                                    {{ count($post->likes) }}
                                </span>
                            </div>
                            <div class="descarga">
                                <span class="logo"  >
                                    <img src="{{  asset('img/descarga.png') }}" alt="descarga">
                                   
                                </span> 
                                <span>
                                     {{ $post->descarga }} 
                                </span>
                            </div>
                    </div>
                </div>
                <div class="data" style="background: transparent;" >
                    <span style="color: #000; font-size: 25px; font-weight:900;">
                        {{ $post->titulo }}
                        <div style="color:#D4AC0D; font-size:17px; font-weight: 500;" >
                            {{ $post->user->name }}
                        </div>
                    </span>
                      
                </div>
       
</div>

<style>

.carta-box{
    min-width: 380px;
    margin-bottom: 80px;
    height:15rem;
          
    box-shadow: 0 0 10px rgba(0, 0, 0, .7);
}



.carta{
     transition: all 1s linear;
    cursor: pointer;
    width: 100%;
    height: 100%;
    border-radius: 5px;
     
     overflow: hidden;
    position: relative;
}
.carta img{
    width: 100%;
    height: 100%;
    margin: auto;
  
   
    background-size: cover;
    background-repeat: no-repeat;
    transition: all 1s linear;
}

.carta img:hover{
    transform: scale(1.3);
}

.carta .data{
    width: 100%;
    height: 60px;
    
    position: absolute;
    left: 0;
    top: 0;
    display: flex;
    align-content: space-between;
    z-index: 10;
}

.carta .data div{
   display: flex;
    width: 100%;
     align-items: center;
     gap: 10px;
}
.carta .data div span{
    color: var(--color2);
    font-weight: 900;
    font-size: 20px;
    font-family:  cursive;
}
.carta .data div span img{
    width: 50px;
    height: 40px;
    display: inline;
}
.carta .data .descarga{
 
    justify-content: end;
   
   
}
.carta .data .descarga span{
    position: relative;
    left: -50px;

}
.data{
   
    width: 100%;
    height: 100px;
    
}

@media (max-width:550px) {
    .carta-box{
        width: 90vw;
        height:26rem;
        
        
    }

}

</style>