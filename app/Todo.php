<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'completed', 'user_id', 'description'];

    // public function getRouteKeyName()
    // {
    //     return 'title';
    // }
}
