<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\subategoria;
use App\Models\Post;
use App\Models\Comentario;
use App\Models\Like;
use App\Models\ilove;
use App\Models\dislike;
use App\Models\Imagenes;
use App\Models\subcategoria;
use App\Models\User;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoria = Categoria::all();
        $posts = Post::where('aprovacion' , '=' , '1')->paginate(9);
        return view('Post.post' , ['categorias' => $categoria , 'posts' => $posts ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $subcategoria = subcategoria::all();
        return view('Post.create' , ['categorias' => $categorias , 'subcategorias' => $subcategoria ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
   
    $request->validate([
            'post' => 'required',
            'titulo' => 'required',
            'categoria' => 'required',
            'subcategoria' => 'required',
            
        ]);
    
      $newpost =  Post::create([
            'post' => $request->post,
            'imagen' => $request->file('imagen_principal')->store('public'),
            'archivo' =>   $request->file('archivo')->store('public'),
            'titulo' => $request->titulo,
            'descarga'=> 0,
         
            'id_categoria' => $request->categoria,
            'id_subcategoria' => $request->subcategoria,
            'id_usuario' => $request->user_id

    ]);

    //para almacenar las imagens
    
     
    if($request->hasfile('galeria'))
    {
       $imagenes = [];
       $imagenes = $request->file('galeria');
       foreach($imagenes as $imagen)
        {
           
            Imagenes::create([
                "post_id" => $newpost->id,
                'imagenes' =>  $imagen->store('public')
            ]);    
          }
        
     }  

       
        
        return redirect('/perfil' )->with('post' , 'su publicacion sera registrada por el administrador resivira un mensage cuando este lista');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $post = Post::find($id);
         $postPaginste = $post::where("id_usuario" , "=" ,$post->user->id)->paginate(4);  
         return  view('Post.show' , ['post' => $post  , 'masposter' => $postPaginste ]) ;
    }

    //descarga

    public function descarga($id){
         $post = Post::find($id);
         $post->descarga = $post->descarga + 1 ;
         $post->save();
         $archivo = storage_path('app/'.$post->archivo);
         return response()->download($archivo);
    }

    public function categoriaShow($id){
        $categorias = Categoria::find($id);
        return view('post.filtro' , ['categorias' => $categorias    ]);
    }

    public function subcategoriaShow($id){
        $subcategorias = subcategoria::find($id);
        $categorias = Categoria::find($subcategorias->categoria->id);

        return view('post.filtro2' , ['subcategorias' => $subcategorias , 'categorias' => $categorias   ]);

    }

    public function comentario(Request $request){
        $request->validate([
            'comentario' => 'required'
        ]);
        $result = Comentario::create([
            'comentario' => $request->comentario,
            'post_id' => $request->post_id,
            'correo' => $request->email,
            'username' =>$request->username,
            'avatar' =>$request->avatar

        ]);

        $result->save();


        return redirect('inicio/'.$request->post_id );
    }

    //like

    public function like(Request $request ){

        $usuario_id = Like::where('user_id' , '=' ,Auth::user()->id)->first();
        $post_id = Like::where('post_id' , '=' , $request->post_id ) ->first();

      
       if( gettype($usuario_id) != "NULL"  && gettype($post_id) != 'NULL'  ){
            $repetir->delete();
       }else{
         $data =  Like::create([
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id
         ]);
       }

        return  redirect('inicio/'.$request->post_id );
    }
    
    //para los dislike

     public function dislike(Request $request ){

          $usuario_id = dislike::where('user_id' , '=' ,Auth::user()->id)->first();
        $post_id = dislike::where('post_id' , '=' , $request->post_id ) ->first();

       if(gettype($usuario_id) != "NULL"  && gettype($post_id) != 'NULL'){
          $post_id->delete();
       }else{
         
         $data =  dislike::create([
            'user_id' =>Auth::user()->id,
            'post_id' => $request->post_id
         ]);

         $data->save();
       }

        return  redirect('inicio/'.$request->post_id );
    }

    //para los me encantan

     public function ilove(Request $request ){

      $usuario_id = ilove::where('user_id' , '=' ,Auth::user()->id)->first();
        $post_id = ilove::where('post_id' , '=' , $request->post_id ) ->first();

       if(gettype($usuario_id) != "NULL"  && gettype($post_id) != 'NULL'){
            $post_id->delete();
             

       }else{
         
         $data =  ilove::create([
            'user_id' => Auth::user()->id,
            'post_id' => $request->post_id
         ]);

         $data->save();
       }

        return  redirect('inicio/'.$request->post_id );
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
