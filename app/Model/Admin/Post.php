<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titulo', 'estado', 'contenido', 'user_id', 'imagen_id', 'slug'];
}
