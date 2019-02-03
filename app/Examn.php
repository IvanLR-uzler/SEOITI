<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examn extends Model
{
    protected $fillable = [
        'correctAns','user_id'
    ];
}
