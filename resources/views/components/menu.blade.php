 <nav class="menu">
        <div class="logo">
            <figcaption>
                    <img width="100%" src="{{ asset('/img/logo-f.png') }}" alt="logo">
            </figcaption>
            <div class="discor">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"  viewBox="0 0 512 512"><path fill="#f1c40f" d="M464 66.52A50 50 0 0 0 414.12 17L97.64 16A49.65 49.65 0 0 0 48 65.52V392c0 27.3 22.28 48 49.64 48H368l-13-44l109 100ZM324.65 329.81s-8.72-10.39-16-19.32C340.39 301.55 352.5 282 352.5 282a139 139 0 0 1-27.85 14.25a173.31 173.31 0 0 1-35.11 10.39a170.05 170.05 0 0 1-62.72-.24a184.45 184.45 0 0 1-35.59-10.4a141.46 141.46 0 0 1-17.68-8.21c-.73-.48-1.45-.72-2.18-1.21c-.49-.24-.73-.48-1-.48c-4.36-2.42-6.78-4.11-6.78-4.11s11.62 19.09 42.38 28.26c-7.27 9.18-16.23 19.81-16.23 19.81c-53.51-1.69-73.85-36.47-73.85-36.47c0-77.06 34.87-139.62 34.87-139.62c34.87-25.85 67.8-25.12 67.8-25.12l2.42 2.9c-43.59 12.32-63.44 31.4-63.44 31.4s5.32-2.9 14.28-6.77c25.91-11.35 46.5-14.25 55-15.21a24 24 0 0 1 4.12-.49a205.62 205.62 0 0 1 48.91-.48a201.62 201.62 0 0 1 72.89 22.95s-19.13-18.15-60.3-30.45l3.39-3.86s33.17-.73 67.81 25.16c0 0 34.87 62.56 34.87 139.62c0-.28-20.35 34.5-73.86 36.19Z"/><path fill="#f1c40f" d="M212.05 218c-13.8 0-24.7 11.84-24.7 26.57s11.14 26.57 24.7 26.57c13.8 0 24.7-11.83 24.7-26.57c.25-14.76-10.9-26.57-24.7-26.57Zm88.38 0c-13.8 0-24.7 11.84-24.7 26.57s11.14 26.57 24.7 26.57c13.81 0 24.7-11.83 24.7-26.57S314 218 300.43 218Z"/></svg>
             
                
                    <span style="position: relative; top: -10px;" >
                        !unete a Bingo Mods en  Discord !
                    </span>
                </a>
              
            </div>
        </div>
        <div class="link">
            <div class="data">
                <span>
                  
                          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36"><path fill="#f1c40f" d="m32.85 28.13l-.34-.3A14.37 14.37 0 0 1 30 24.9a12.63 12.63 0 0 1-1.35-4.81v-4.94A10.81 10.81 0 0 0 19.21 4.4V3.11a1.33 1.33 0 1 0-2.67 0v1.31a10.81 10.81 0 0 0-9.33 10.73v4.94a12.63 12.63 0 0 1-1.35 4.81a14.4 14.4 0 0 1-2.47 2.93l-.34.3v2.82h29.8Z" class="clr-i-solid clr-i-solid-path-1"/><path fill="#f1c40f" d="M15.32 32a2.65 2.65 0 0 0 5.25 0Z" class="clr-i-solid clr-i-solid-path-2"/><path fill="none" d="M0 0h36v36H0z"/></svg>
                   
                </span>
                <span class="avatar">
                    <img src="" alt="">
                </span>
                <span>
                   Bobby
                </span>
            </div>
        </div>
</nav>
<style type="text/css">
.menu{
    position: fixed;
   
    z-index:10;
    width: 95%;
    height: 80px;
    top: 0;
    right: 0;
    display: grid;
   
    grid-template-columns: repeat(2, 1fr);
    padding: 10px;
}

.menu .logo{
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: space-between ;
    align-items: center;
    color: var(--textprimary);
     
}

.menu .discor{
    border-radius: 60px 63px 58px 61px;
-moz-border-radius: 60px 63px 58px 61px;
-webkit-border-radius: 60px 63px 58px 61px;

    border: solid 3px #F1C40F;
    margin-left: 10px;
    height: 20px;
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
    border: solid 1px black;
    width: 50px;
    height: 50px;
    border-radius: 50%;
}
</style>