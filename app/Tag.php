<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    // Nombre de la tabla
    protected $table = 'tags';

    // Campos que puedo llenar de forma masiva
    protected $fillable = ['nombre'];

    // No timestamps
    public $timestamps = false;
}
