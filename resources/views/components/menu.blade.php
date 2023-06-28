 <nav class="menu">
        <div class="logo">
            <figcaption>
                <a href="{{ route('post.index') }}">
                     <img width="100%" src="{{ asset('/banner_blanco.png') }}" alt="logo">
                </a>
                   
            </figcaption>
      
        </div>
              <div class="discor">
                <a href="{{ route('post.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32"><path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22c-9 1-8-10 0-9C6 2 23 2 22 10c10-3 10 13 1 12m-12-4l5-4l5 4m-5-4v15"/></svg>
             
                
                    <span style="position: relative; top: -10px; font-size: 20px; color: #fff;" >
                       Uload
                    </span>
                </a>
              
            </div>

        <div class="link">
            <div class="data">
             
                @auth
                    <span class="avatar">
                        <a href="{{ url('/perfil') }}">
                            <img src="{{  Storage::url(  Auth::user()->avatar  ) }}" alt="">
                        </a>
                        
                    </span>
                      <a href="{{ route('user.desboard') }}">
                         {{ Auth::user()->name }}
                    </a>
                @elseauth
             
                  
                   
                @else
                  <span>
                        <a href="{{ route('login') }}" style="color:#000; font-size:25px">Login</a>
                  </span>
                @endauth
            </div>
        </div>
</nav>
<style type="text/css">
.menu{
    position: fixed;
    background-color: rgba(241, 196, 15  , 1);
    z-index:1000;
    width: 100%;
    height: 80px;
    top: 0;
    right: 0;
    align-items: center;
    display: flex;
    justify-content:space-between;
}

.menu .logo{
      height: 3rem;
    width: 15rem;
    margin-left: 2rem;
   
  
    color: #fff;
    

}

.menu .discor{
    border-radius: 60px 63px 58px 61px;
        -moz-border-radius: 60px 63px 58px 61px;
        -webkit-border-radius: 60px 63px 58px 61px;

    border: solid 3px #000;
 
    height: 1rem;
    width: 15rem;
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;

}
.menu .discor span{
    margin: 0 0 0 15px;
}

.menu .logo figcaption{
    height: 3rem;
    width: 15rem;
  
    
}

.menu .logo figcaption img{
    width: 100%;
    height: 100%;
}

.link{
   
    display: flex;
    justify-content: end;
    align-items: center;
      height: 3rem;
    width: 15rem;
}

.menu .link .data{
    width: 200px;
    height: 90%;

    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
.menu .link .data span{
    font-size: 20px;
    display: flex;
    align-items: center;
    justify-content: center; 
}

.menu .link .data .avatar{
   
    width: 50px;
    height: 50px;
    border-radius: 50%;
}

.menu .link .data .avatar img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}

.menu .link .data a{
    text-decoration: none;
    font-size: 20px;
    font-weight: 500;
    color: #fff;
}

.menu .link .data a:hover{
    text-decoration: underline;
}

@media (max-width:800px) {
    .menu .discor{
        width: 10rem;
        height: 100%;
    }
    .menu .logo{
        width: 8rem;
    }
    .menu .logo figcaption{
        width: 8rem;
    }
}


@media (max-width:500px) {
    .menu .discor{
        width: 10rem;
        height: 90%;
    }
    .menu .logo{
        width: 8rem;
    }

    .menu .discor span{
        display: none;
    }
    .menu .logo figcaption{
        width: 5rem;
    }
}
</style>