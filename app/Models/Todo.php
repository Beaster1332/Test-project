<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ["title", "description", "status"];

    // свойство модели $hidden даёт возможность скрывать некоторые свойства при использовании методов toArray и toJson

//    protected $hidden = ["id", "created_at"];
}
