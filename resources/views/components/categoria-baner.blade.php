<div>
    <div class="baner-categoria">
      
           <x-categoria/>
      
       
    </div>
 </div>
 <style type="text/css">
    .baner-categoria{
        width: 150px;
        z-index: 2;
        height: 600px;
        position: absolute;
        left: 50px;
        top: 250px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 40px;
        padding: 10px;

        
    }
    .baner-categoria .categoria{
       display: grid;
        width: 150px;  
        height: 40px;
       display: flex;
       gap: 10px;

        cursor: pointer;
    
    }

   
    
    @media (max-width:1700px) {
          .baner-categoria{
         
            position:relative;
            width: 100%;
            height: auto;
            display: grid;
            grid-template-columns: repeat(auto-fill,minmax(100px , 1fr));
           
            margin-top: 50px;
            gap: 10px;
            left: 0;
            top: 0;
            margin-bottom: 50px;
            padding-left: 15rem;
          }   

          .baner-categoria .categoria
          {
           
          
            height: 100px;
            width: 100%;
            display: grid;
            justify-content: center;
            align-items: center;
            text-align: center;
            grid-template-rows: repeat(2, 1fr);
            grid-template-columns: repeat(1, 1fr);
          }     

        .baner-categoria .categoria .img img
          {
            width: 100%;
            margin: auto;
          }    

          .baner-categoria .categoria .img{
            margin: auto;
          }
    }


    @media (max-width:980px) {
        .baner-categoria{
            padding-left: 2;
        }
    }
</style>
</div>

