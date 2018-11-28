<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  
// Declaracion de las relaciones entre tablas

    protected $table = "tags";

    protected $fillable = ['name'];

    public function articles()
    {
      return $this->belongsToMany('App\Article')->withTimestamps();
    }

// Esta public function permite la busqueda  de tags, para el resto dirigirse a resources/views/ y las vistas index de tags

    public function scopeSearch($query, $name)
    {
      return $query -> where('name', 'LIKE', "%$name%");
    }
/*
    public function scopeSearchTag($query, $name)
    {
      return $query -> where('name', '=', $name);
    }
    */
}
