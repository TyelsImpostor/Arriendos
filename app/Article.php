<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

// Declaracion de las relaciones entre tablas

    protected $table = "articles";

    protected $fillable = ['title', 'content', 'region', 'category_id', 'user_id', 'admin'];

    public function category()
    {
      return $this->belongsTo('App\Category');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function images()
    {
      return $this->hasMany('App\Image');
    }

    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }

// Esta public function permite la busqueda  de articulos, para el resto dirigirse a resources/views/ y las vistas index de articulos

    public function scopeSearch($query, $title)
    {
      return $query -> where('title', 'LIKE', "%$title%");
    }
}
