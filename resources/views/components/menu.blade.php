 <nav class="menu">
        <div class="logo">
            <figcaption>
                <a href="{{ route('post.index') }}">
                     <img width="100%" src="{{ asset('/banner_blanco.png') }}" alt="logo">
                </a>
                   
            </figcaption>
            <div class="discor">
                <a href="{{ route('post.create') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 32 32"><path fill="none" stroke="black" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 22c-9 1-8-10 0-9C6 2 23 2 22 10c10-3 10 13 1 12m-12-4l5-4l5 4m-5-4v15"/></svg>
             
                
                    <span style="position: relative; top: -10px; font-size: 20px; color: #fff;" >
                       Uload
                    </span>
                </a>
              
            </div>
        </div>
        <div class="link">
            <div class="data">
                <span>
                  
                 
                   
                </span>
                @auth
                    <span class="avatar">
                        <img src="{{  Storage::url(  Auth::user()->avatar  ) }}" alt="">
                    </span>
                @elseauth
                <span>

                </span>
                @endauth
             
                @auth
                    {{ Auth::user()->name }}
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
    background-color: rgba(241, 196, 15  , .8);
    z-index:10;
    width: 100%;
    height: 80px;
    top: 0;
    right: 0;
    display: grid;
  
    grid-template-columns: 70% auto;
    padding: 10px;
}

.menu .logo{
    width: 100%;
    height: 100%;
    display: flex;
  
  
    color: #fff;
     margin-left: 200px;

}

.menu .discor{
    border-radius: 60px 63px 58px 61px;
-moz-border-radius: 60px 63px 58px 61px;
-webkit-border-radius: 60px 63px 58px 61px;

    border: solid 3px #fff;
    margin-left: 400px;
    height: 60px;
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;

}
.menu .discor span{
    margin: 0 0 0 15px;
}

.menu .logo figcaption{
    width: 300px;
    height: 80px;
    margin: 0 0 0 30px;
}

.menu .logo figcaption img{
    width: 100%;
    height: 100%;
}

.link{
  
    display: flex;
    justify-content: end;
    align-items: center;
}

.menu .link .data{
    width: 200px;
    height: 90%;
    margin: 0 60px 0 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    place-content: center;
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
</style>