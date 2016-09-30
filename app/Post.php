<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
// Eliminación lógica (1)
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    // Eliminación lógica (2)
    use SoftDeletes;

    protected $table = 'posts';

    // Cambiamos el key
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado', 'categoria_id'];
}
