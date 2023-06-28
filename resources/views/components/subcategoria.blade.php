 <div>
    <div class="baner-categoria">
      
         @foreach($categorias->subcategorias as $sub)
            <a 
             class="link {{ explode('/' , request()->path() )[1] == $sub->id ? 'active' : null }}"  
             href="{{ route('subcategorias.busqueda' , $sub->id ) }}" > 
             {{ $sub->descripcion }} 
            
          </a>
         @endforeach
     
    </div>
 </div>


<style type="text/css">

    .baner-categoria{
        width: 150px;
        z-index: 2;
        height: 600px;
        position: absolute;
        left: 100px;
        top: 400px;
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

    .baner-categoria  a{
      text-decoration: none;
      font-size: 17px;
      font-weight: 100;
      font-family: cursive;
      color: #000;

    }

    .baner-categoria  a:hover{
      text-decoration: underline;
    }

   @media (max-width:1400px) {
     .baner-categoria{
        width: 50%;
        margin: auto;
        
        z-index: 2;
        height: 100px;
        position:relative;
        inset: 0;
        display: gap;
        display: flex;
        flex-direction: row;
        
     }

     .baner-categoria .categoria{
        border: solid 1px black;
     }
   }
    

     .baner-categoria  a.active{
      color: rgba(241, 196, 15 , 1);
      font-weight: 900;
   }
</style>