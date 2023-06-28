<div>
     <div class="avatar">
        <img src="{{ Storage::url($post->user->avatar) }}" alt="">
    </div>
    <div class="email" style="color:#E67E22">
        {{ $post->user->email }}
    </div>
</div>

<style>
     
        .avatar{
            width: 7rem;
            height: 7rem;
           
            border-radius: 50%;
            margin: auto;
        }
        .avatar img{
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .email{
           
            text-align: center;    
            color: #DEBA29 ;
            font-size: 1rem;
            font-weight: 900;
        }
</style>