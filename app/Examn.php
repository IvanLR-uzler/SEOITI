<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examn extends Model
{
    protected $fillable = [
        'correctAns','user_id'
    ];

    protected $table='examns';

    public function questions()
    {
        return $this->belongsToMany(Question::class, 'examn_question');
    }
}
