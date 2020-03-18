<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title'];

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }
}
