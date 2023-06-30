
    <article class="publicidad">
       <div class="informacion">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                  <div class="swiper-slide">
                      <img  src="https://i.blogs.es/dbef83/v_frisk_me_2880x1800/1366_2000.jpeg" alt="portada gta">
                  </div>
                  <div class="swiper-slide">
                      <img 
                        src="https://www.denofgeek.com/wp-content/uploads/2020/05/GTA-5-feature-mod.jpg?fit=2560%2C1080" 
                        alt="">
                  </div>
                  <div class="swiper-slide">
                      <img 
                        src="https://media.vandal.net/i/1280x720/88633/grand-theft-auto-v-202112168221082_1.jpg" 
                        alt="">
                  </div>
      
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
            
        </div>
       
    </article>
    

<style type="text/css">
    .publicidad{
        
        position : relative;

        margin-top: 60px;
        position:relative;
        left: -20px;
        width:95rem;
        margin:auto;
        height: 20rem;
        display: grid;
        grid-template-columns: 70% 20%;
        gap: 10px;
       
        margin-bottom: 40px;
    }

    @media (max-width:1400px) {
        .publicidad{
            left:1px;
            width: 100vw;
        }  


    }
    .informacion{
        width: 100%;
        height: 100%;
        box-shadow: 0 0 10px var(--sombra);    
        overflow: hidden;
        border-radius: 20px;
    }

    .publicidad .informacion img{
        width: 100%;
        height: 100%;
        border-radius: 20px;
    }

    .publicidad .img{
       border-radius: 20px;
       height: 100%;
       width: 400px;
       overflow: hidden;   
          box-shadow: 0 0 10px var(--sombra);     
    }    

    .publicidad .img img{
        
        width: 100%;
        height: 100%;
    }

 

      .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }


    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


    @media (max-width: 1100px) {

        .publicidad{
                   width: 100%;
                height: 30rem;
                margin: auto;
                display: flex;
                flex-wrap: wrap;
                left:0;
                        }

        .publicidad .img{
          height: 100%;
          width: 80%;
          margin: auto;
          overflow: hidden;   
          border: solid 1px;
          box-shadow: 0 0 10px var(--sombra);     
        }    

       
    }

      @media (max-width: 700px) {

        .publicidad{
            left: 0;
            margin: 0;
            width: 100vw;
        }

        .publicidad .img{
          border-radius:10px;
          height: 100%;
          width: 80%;
          margin: auto;
          overflow: hidden;   
          border: solid 1px;
          box-shadow: 0 0 10px var(--sombra);     
        }    

       
    }
</style>
