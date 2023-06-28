<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategoria extends Model
{
    use HasFactory;



     public function posts()
    {
        return $this->hasMany(Post::class , 'id_subcategoria');
    }


    public function categoria(){
        return  $this->belongsTo(Categoria::class,  'id_categoria');
    }
}
