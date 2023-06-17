<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->belongsToMany(Post::class , 'categoria_posts', 'categoria_id', 'post_id');
    }
     
}
