
        <div class="categoria ">    
            <div class="img"> 
                <a href="{{ route('categoria.busqueda' , 1 ) }}">
                     <img src="{{ asset('/img/post/Vehicle.png') }}" alt="vehiculos">
                </a>
                   

              </div>
            <div class="text">
                Vehiculos
            </div>
        </div>
        <div class="categoria  ">
         
            
            <div class="img"> 
               <a href="{{ route('categoria.busqueda' , 2 ) }}" >
                 <img src="{{ asset('/img/post/helicopter.png') }}" alt="helicoptero">
              </a>
            </div>
              <div class="text">
                Helicopteros
            </div>
          
         
        </div>
        <div class="categoria  ">
      
              <div class="img"> 
                    <a href="{{ route('categoria.busqueda' , 4 ) }}">
                         <img src="{{ asset('/img/post/Boat.png') }}" alt="Barcos">

                   </a>
               
              </div>
              <div class="text">
                Barcos
            </div>
        </div>
          <div class="categoria  ">
            <div class="img"> 

                <a href="{{ route('categoria.busqueda' , 3 ) }}">
                  
                     <img src="{{ asset('/img/post/Map.png') }}" alt="Mapas">
                </a>
                
            </div>
           
              <div class="text">
                Mapas
            </div>
        </div>
          <div class="categoria  ">
            <div class="img"> 
              <a href="{{ route('categoria.busqueda' , 5 ) }}">
                 <img src="{{ asset('/img/post/Plane.png') }}" alt="Aviones">

              </a>
               

            </div>
              <div class="text">
                Aviones
            </div>
        </div>
          <div class="categoria  ">
            <div class="img"> 
                <a href="{{ route('categoria.busqueda' , 6 ) }}">
                 <img src="{{ asset('/img/post/Skins.png') }}" alt="skins">

              </a>
              

            </div>
              <div class="text">
                skins
            </div>
        </div>
        <div class="categoria  ">
            <div class="img"> 
                <a href="{{ route('categoria.busqueda' , 7 ) }}">
                
                  <img src="{{ asset('/img/post/Pawn.png') }}" alt="pawsScripr">
              </a>
            </div>
              <div class="text">
                Paws 
            </div>
        </div>    



<style>
    
    .categoria .categoria .text{
      
        bottom: 0;
        right: 0;
        text-align: center;
        z-index: 22;
        font-size: 15px;
        font-weight: 900;
        display: flex;
        align-items: center;
        justify-content: center;  
        
    }

    .categoria .img{
          width: 50px;
          height: 50px;
          border: none;
         
     } 
    .categoria img {
        width: 100%;
        height: 100%;   

    }
    .categoria:hover{
        transform: translateZ(200px);
       
    }

    .categoria.active{
        border: 1px solid var(--color2);
        border-radius:5px;
    }
    .categoria .texto{
    
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        font-weight: 200;
    }

    .categoria .logo{
        background-color: black;
        border: solid 1px black;
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }
</style>