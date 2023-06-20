<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

       protected $fillable = [
        'post',
        'titulo',
        'imagen',
        'archivo',
        'id_usuario',
        'id_categoria',
        'id_subcategoria',
        'descarga',
        'avatar'
        
    ];


    public function user(){
         return $this->belongsTo(User::class, 'id_usuario');
    }

     public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }



      public function dislikes()
    {
        return $this->hasMany(dislike::class);
    }
      public function ilove()
    {
        return $this->hasMany(ilove::class);
    }

     public function categorias()
    {
        return $this->belongsTo(Categoria::class,  'id_categoria');
    }

    public function subcategorias()
    {
        return $this->belongsTo(subcategoria::class,  'id_subcategoria');
    }
}
