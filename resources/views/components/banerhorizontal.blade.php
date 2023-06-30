<div class="baner-horizontal">
      @if( $type == true ) 

        <div class="categoria">
            <div class="img"> 
                <a href="{{ route('categoria.busqueda' , 1 ) }}">
                     <img src="{{ $categoria == 1 ? asset('/img/Veiculoslogo.png'): asset('/img/post/vehicle.png')  }}" alt="vehiculos">
                </a>
                   

              </div>
            <div class="text">
                Vehiculos 
            </div>
        </div>
        <div class="categoria  ">
         
            
            <div class="img"> 
               <a href="{{ route('categoria.busqueda' , 2 ) }}" >
                 <img src="{{ $categoria == 2 ? asset('/img/helicopterologo.png') :asset('/img/post/helicopter.png') }}" alt="helicoptero">
              </a>
            </div>
              <div class="text">
                Helicopteros
            </div>
          
         
        </div>
        <div class="categoria  ">
      
              <div class="img"> 
                    <a href="{{ route('categoria.busqueda' , 4 ) }}">
                         <img src="{{ $categoria ==  4 ? asset('/img/helicopterologo.png') :asset('/img/post/Boat.png') }}" alt="Barcos">

                   </a>
               
              </div>
              <div class="text">
                Barcos
            </div>
        </div>
          <div class="categoria  ">
            <div class="img"> 

                <a href="{{ route('categoria.busqueda' , 3 ) }}">
                  
                     <img src="{{ $categoria ==  3 ? asset('/img/mapaslogos.png') : asset('/img/post/Map.png') }}" alt="Mapas">
                </a>
                
            </div>
           
              <div class="text">
                Mapas
            </div>
        </div>
          <div class="categoria  ">
            <div class="img"> 
              <a href="{{ route('categoria.busqueda' , 5 ) }}">
                 <img src="{{ $categoria == 5  ? asset('/img/avioneslogo.png') :asset('/img/post/Plane.png') }}" alt="Aviones">

              </a>
               

            </div>
              <div class="text">
                Aviones
            </div>
        </div>
          <div class="categoria  ">
            <div class="img"> 
                <a href="{{ route('categoria.busqueda' , 6 ) }}">
                 <img src="{{ $categoria ==  6 ? asset('/img/Skinslogo.png') :asset('/img/post/skins.png') }}" alt="skins">

              </a>
              

            </div>
              <div class="text">
                skins
            </div>
        </div>
        <div class="categoria  ">
            <div class="img"> 
                <a href="{{ route('categoria.busqueda' , 7 ) }}">
                
                  <img src="{{ $categoria ==  7 ? asset('/img/pawnScriprlogo.png') : asset('/img/post/Pawn.png') }}" alt="pawsScripr">
              </a>
            </div>
              <div class="text">
                Paws 
            </div>
        </div>    


    @endif
    @if($type == false)

      <div class="leyenda" style="z-index: 10;  ">  
          <h1  style="font-family: arial; color:#fff;font-weight: 900; font-size: 50px;" >  BINCO MODS</h1>
          <p  style="font-family: arial; text-align: center; font-size: 20px; color:#D68910; font-weight: 900; " >More trash for less cash</p>
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
     
        width:100%;
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
  
  @media (max-width:1200px) {
      .baner-horizontal{
       position: relative;
        width: 100vw;
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-template-rows: repeat(2, 1fr);
       
        justify-content: center;
        align-items: center;
      }

      .baner-horizontal .categoria{
        width: 70px;height: 70px;
        
      }

      .leyenda {
        
        width: 100%;
        height: 100%;
        position: absolute;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        top: 0;
        left: 0;
      }

      .baner-horizontal .categoria .text{
        font-size: 18px;
      }
  }

   @media (max-width: 500px) {
     .baner-horizontal .categoria{
        width: 60px;height: 20px;
        
     }

     .baner-horizontal .categoria .text{
      font-size: 14px;
       
     }

     .baner-horizontal{
      height: 350px;
      padding: 20px;
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: repeat(3, 1fr);
     }
   }

  
</style>