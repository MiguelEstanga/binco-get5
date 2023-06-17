<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function user(){
         return $this->belongsToMany(User::class, 'user__posts', 'user_id', 'post_id');
    }

     public function comentarios()
    {
        return $this->hasMany(Comentario::class);
    }

     public function categorias()
    {
        return $this->hasMany(Categoria::class,  'categoria_posts', 'posts_id', 'categoria_id');
    }
}
