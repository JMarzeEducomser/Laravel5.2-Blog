<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
// Eliminación lógica (1)
use Illuminate\Database\Eloquent\SoftDeletes;

use Carbon\Carbon;

class Post extends Model
{
    // Eliminación lógica (2)
    use SoftDeletes;

    protected $table = 'posts';

    // Cambiamos el key
    protected $primaryKey = 'codigo';
    public $incrementing = false;

    protected $fillable = ['codigo', 'titulo', 'contenido', 'publicado', 'categoria_id', 'imagen'];

    // Scopes
    //public function scopeNombre(){}
    public function scopeLikePost($query, $criterio){
        return $query->where('codigo', 'LIKE', "%$criterio%")->orWhere('titulo', 'LIKE', "%$criterio%");
    }

    // Mutators
    //public function getNombreCampoAttribute(){}
    public function setImagenAttribute($imagen){
        $nuevoNombre = Carbon::now()->year . Carbon::now()->month . Carbon::now()->day . "-" . Carbon::now()->hour . Carbon::now()->minute . Carbon::now()->second . "." . $imagen->getClientOriginalExtension();

        $this->attributes['imagen'] = $nuevoNombre;

        \Storage::disk('local')->put($nuevoNombre, \File::get($imagen));
    }

    // Relationships
    public function categoria(){
        return $this->belongsTo('Blog\Categoria');
    }

    public function tags(){
        return $this->belongsToMany('Blog\Tag', 'post_tag', 'post_codigo', 'tag_id');
    }
}
