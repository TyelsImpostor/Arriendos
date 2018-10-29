<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

// Declaracion de las relaciones entre tablas

    protected $table = "images";

    protected $fillable = ['name', 'article_id'];

    public function article()
    {
      return $this->belongsTo('App\Article');
    }
}
