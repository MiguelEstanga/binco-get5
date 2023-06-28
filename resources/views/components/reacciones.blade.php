  <div class="reacciones">
        <div class="item">
                    {{ count($post->likes) }}
            <form action="{{ route('like.add') }}" method="post">
                 @csrf
             @auth
                <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
                <input hidden type="text"  name="post_id" value="{{ $post->id }}">
             @endauth
                    
                <button style="border:none; background-color: transparent;">
                    <img src="{{  asset('img/post/Like.png') }}"  }}" alt="">
                </button>
        
                      
                    </form>
        </div>
        <div class="item">
                {{ count($post->dislikes) }}
             <form action="{{ route('dislike.add') }}" method="post">
                @csrf
                @auth
                     <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
                     <input hidden type="text"  name="post_id" value="{{ $post->id }}">
                @endauth
                    <button style="border:none; background-color: transparent;">
                        <img src="{{  asset('img/post/Dislike.png') }}"  }}" alt="">
                    </button>
            </form>
                  
        </div>
                <div class="item">
                  {{ count($post->ilove) }}
                  <form action="{{ route('ilove.add')  }}" method="post">
                      @csrf
                      @auth
                        <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
                        <input hidden type="text"  name="post_id" value="{{ $post->id }}">
                      @endauth
                      <button style="border:none; background-color: transparent;">
                        <img src="{{  asset('img/post/Meencanta.png') }}"  }}" alt="">
                      </button>
                    </form>
                </div>
    </div>

    <style>
        .reacciones{
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;

        }

        .reacciones .item{
            width: 5rem;
            text-align: center;
        }

     .reacciones .item img{
            width: 100%;height: 100%;
        }

        @media (max-width: 1136) {
            
        }
    </style>