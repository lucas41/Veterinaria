<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class veterinaria extends Model
{
    protected $table="Caes";
    protected $fillable = ['nome','raca'];
    public $timestamps = false;
}
