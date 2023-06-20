<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class , 'id_categoria');
    }

    public function subcategorias(){
        return $this->hasMany(subcategoria::class , 'id_categoria');
    }
     
}
