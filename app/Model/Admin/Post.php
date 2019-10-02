<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titulo',
        'contenido',
        'likes',
        'dislikes',
        'categoria_id',
        'user_create_id',
        'user_modified_id',
        'imagen_id',
        'slug',
        'estado'];

    public function imagenes(){
        $this->tobelongMany(App\Model\Imagen::class);
    }
}
