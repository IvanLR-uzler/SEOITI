<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'context', 'ansA','ansB','ansC', 'ansD', 'correctAns','reactive','user_id','know_id',
    ];
}
