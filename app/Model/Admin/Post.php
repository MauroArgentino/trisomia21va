<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Model\Admin\User;

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

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }    

    public function user(){
        return $this->belongsTo('User', 'id');
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function imagen(){
        return $this->belongsTo(Imagen::class);
    }
}
