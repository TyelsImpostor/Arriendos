<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pay extends Model
{

// Declaracion de las relaciones entre tablas

    protected $table = "pays";

    protected $fillable = ['title', 'rut', 'pay', 'user_id'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
