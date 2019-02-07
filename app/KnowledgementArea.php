<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KnowledgementArea extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description',
    ];

    public function questions(){
        return $this->hasMany('App\Question', 'knowledgement_area_id','id');
    }

}
