<div class="baner-horizontal">
      @if( $type == true ) 
        <div class="categoria">
            <div class="img"> 
                <a href="{{ route('categoria.busqueda' , 1 ) }}">
                     <img src="{{ asset('/img/post/vehicle.png') }}" alt="vehiculos">
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
                 <img src="{{ asset('/img/post/skins.png') }}" alt="skins">

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


    @endif
    @if($type == false)

      <div class="leyenda" style="z-index: 10;">  
          <h1  style="color:#fff;font-weight: 900; font-size: 50px;" >  Bingo Mods</h1>
          <p  style="text-align: center; color: #F1C40F;" >More trash for less cash</p>
      </div>  

    @endif    

    <div class="difuminar">
      
    </div>
</div>

<style type="text/css">
    .difuminar{
      z-index: 0;
      position: absolute;
      top: 0;
      margin: 0;
      left: 0;
      width: 100%;
      height: 100%;
       box-shadow: 0px 0px 25px #222;
      backdrop-filter: blur(10px);
    }
    .baner-horizontal{
     
        width: 100%;
        height: 250px;
        margin-top: 80px;
        display: flex;
        
        justify-content: center;
        align-items: center;
        gap: 50px;
        position: relative;
        background-image: url('/img/banner-categoria.jpg');

        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .baner-horizontal::before{
        content: " ";
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 2px;
        background-color: #F1C40F;
        border: solid 1px #F1C40F;
    }


    .baner-horizontal .categoria{
        width: 70px;
        height: 70px;
        cursor: pointer;
        margin: 10px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        z-index: 10;
    }

    .baner-horizontal  img{
        width: 100%;
        height: 100%;
    }

    .baner-horizontal .categoria .text{
        font-size: 20px;
        font-weight: 900;
        text-align: center;
        font-family: cursive;
        color: #fff;
    }

    /**  efecto del baner **/
  

   

  
</style>