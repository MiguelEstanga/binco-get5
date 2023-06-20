<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\subategoria;
use App\Models\Post;
use App\Models\Comentario;
use App\Models\Like;
use App\Models\ilove;
use App\Models\dislike;

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
        $posts = Post::select('id','titulo'  , 'imagen', 'descarga' , 'id_usuario')->with('User:id,name')->get();
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
        
        Post::create([
            'post' => $request->post,
            'imagen' => $request->file('imagen')->store('public'),
            'archivo' =>   $request->file('archivo')->store('public'),
            'titulo' => $request->titulo,
            'like' => 0 ,
            'descarga'=> 0,
             'i_lov' => 0 ,
            'id_categoria' => $request->categoria,
            'id_subcategoria' => $request->subcategoria,
            'id_usuario' => $request->user_id

         ]);
        return redirect('/inicio');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $post = Post::find($id);
        

        return  view('Post.show' , ['post' => $post ]) ;
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
        return view('post.filtro2' , ['subcategorias' => $subcategorias    ]);

    }

    public function comentario(Request $request){
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

        $repetir = Like::where('user_id' , '=' , $request->user_id ,'and' , 'post_id' , '=' , $request->post_id)->first();

       if($repetir){
            $repetir->delete();
             

       }else{
         
         $data =  Like::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id
         ]);

         $data->save();
       }

        return  redirect('inicio/'.$request->post_id );
    }

    //para los dislike

     public function dislike(Request $request ){

        $repetir = dislike::where('user_id' , '=' , $request->user_id ,'and' , 'post_id' , '=' , $request->post_id)->first();

       if($repetir){
            $repetir->delete();
             

       }else{
         
         $data =  dislike::create([
            'user_id' => $request->user_id,
            'post_id' => $request->post_id
         ]);

         $data->save();
       }

        return  redirect('inicio/'.$request->post_id );
    }

    //para los me encantan

     public function ilove(Request $request ){

        $repetir = ilove::where('user_id' , '=' , $request->user_id ,'and' , 'post_id' , '=' , $request->post_id)->first();

       if($repetir){
            $repetir->delete();
             

       }else{
         
         $data =  ilove::create([
            'user_id' => $request->user_id,
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
