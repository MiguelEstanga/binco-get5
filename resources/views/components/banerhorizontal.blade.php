<div class="baner-horizontal">
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
                Paws 
            </div>
        </div>
</div>

<style type="text/css">
    .baner-horizontal{
        border: solid 1px black ;
        width: 100%;
        height: 250px;
        margin-top: 100px;
        display: flex;
        
        justify-content: center;
        align-items: center;
        gap: 50px;
        position: relative;


            background-image: url('https://fotografias-neox.atresmedia.com/clipping/cmsimages02/2017/05/05/8FA953A2-B614-4FD8-908F-F248F63DEDE2/default.jpg');
            background-position: center;
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
</style>