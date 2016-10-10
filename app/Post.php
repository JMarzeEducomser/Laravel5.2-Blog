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

    // Scopes
    //public function scopeNombre(){}
    public function scopeLikePost($query, $criterio){
        return $query->where('codigo', 'LIKE', "%$criterio%")->orWhere('titulo', 'LIKE', "%$criterio%");
    }

    // Relationships
    public function categoria(){
        return $this->belongsTo('Blog\Categoria');
    }

    public function tags(){
        return $this->belongsToMany('Blog\Tag', 'post_tag', 'post_codigo', 'tag_id');
    }
}
