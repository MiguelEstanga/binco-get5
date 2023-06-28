<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;
class UserController extends Controller
{
    public function index()
    {
        
       
        $numberpost =  count(Auth::user()->post );
        $megustas = 0;
        $meencata = 0;
        $dislike = 0;
        $descarga = 0;
        $posts =  Auth::user()->post;
        if( $numberpost > 0 ){
           foreach($posts as $post){
                $descarga = $descarga + $post->descarga;
                if( count($post->likes) > 0 ){
                    $megustas = $megustas + count($post->likes);
                }

                if( count( $post->ilove  )  > 0  ){
                     $meencata = $meencata + count($post->ilove );
                }

                if( count( $post->dislikes ) > 0 ){
                    $dislike = $dislike + count($post->dislikes);
                }
           }
        }

      

        
      
        return view('user.index'  , 
                    [
                      'likes' => $megustas,
                      'dislike' => $dislike,
                      'ilove' => $meencata,
                      'descarga' => $descarga
                    ]);
    }

    public  function show($id)
    {
        $userdata = User::find($id);
        return view('user.show' , ['user'=> $userdata ]);
    }

    public function put(Request $request , $id){
        $user =  User::find($id);

        if($request->hasfile('avatar') ){
             $user->avatar = $request->file('avatar')->store('public');        
        }

         $user->name = $request->name;             
            $user->email = $request->email;
            $user->save;
            $user->update();
        return redirect('perfil')->with('mensage' , 'sus datos an sido actulizados');
    }


    //administradores
    public function administrador(){
        $posts = Post::where('aprovacion' , '=' , 0)->paginate(9);

        return view ('admin.index' , [ 'posts' => $posts ]);
    }

    public function verificacion($id){
        $post = Post::find($id);

        return view('admin.show' , ['post' => $post]);
    }

    public  function respuestaAdmin(Request $request , $id )
    {

        $mensage = '';
        if($request->aprobacion == 'no'){
            Post::find($id)->delete(); 

        }else{
            $post = Post::find($id);
            $post->aprovacion = 1;
            $post->update();  
        }

         $mensage = $request->administracion; 
        return redirect('admin/panel')->with('mensage' , $mensage);
    }
    

}
