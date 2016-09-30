<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    // Cambiamos el key
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado', 'categoria_id'];
}
