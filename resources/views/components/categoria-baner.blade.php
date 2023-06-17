<div>
    <div class="baner-categoria">
 
     
        <div class="categoria  ">
            <img src="{{ asset('/img/vehiculoslogo.png') }}" alt="vehiculos">
            <div class="text">
                Vehiculos
            </div>
        </div>
        <div class="categoria  ">
            <img src="{{ asset('/img/helicopterologo.png') }}" alt="helicoptero">
              <div class="text">
                Helicopteros
            </div>
        </div>
        <div class="categoria  ">
            <img src="{{ asset('/img/barcoslogo.png') }}" alt="Barcos">
              <div class="text">
                Barcos
            </div>
        </div>
          <div class="categoria  ">
            <img src="{{ asset('/img/mapaslogos.png') }}" alt="Mapas">
              <div class="text">
                Mapas
            </div>
        </div>
          <div class="categoria  ">
            <img src="{{ asset('/img/avioneslogo.png') }}" alt="Aviones">
              <div class="text">
                Aviones
            </div>
        </div>
          <div class="categoria  ">
            <img src="{{ asset('/img/skinslogo.png') }}" alt="skins">
              <div class="text">
                skins
            </div>
        </div>
          <div class="categoria  ">
            <img src="{{ asset('/img/pawnScriprlogo.png') }}" alt="pawsScripr">
              <div class="text">
                Paws Scripr
            </div>
        </div>
 </div>
 <style type="text/css">
    .baner-categoria{
        width: 90px;
        z-index: 2;
        height: 100vh;
        position: fixed;
        left: 0;
        top: 0;
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 40px;
        padding: 10px;
        background-color: #FDFEFE;
        box-shadow: 0 0 10px var(--sombra);
    }
    .categoria{
        border-radius: 50%;
        height: 50px;
        padding: 10px;
          transform: translateZ(100px);
        border-radius: 5px;
        box-shadow: 0 10px 10px #000;
        cursor: pointer;
        position: relative;
    }

    .categoria .text{
        position: absolute;
        bottom: 0;
        right: 0;
        
        z-index: 22;
        font-size: 15px;
        font-weight: 900;
        *border: solid 1px black;
        
    }
    .categoria img {
        width: 100%;
        height: 100%;   

    }
    .categoria:hover{
        transform: translateZ(200px);
        border-radius: 5px;
        box-shadow: 10px 10px 10px #000;
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
</div>

