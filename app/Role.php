<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'context', 'ansA','ansB','ansC', 'ansD', 'correctAns',
    ];
}
