<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'context', 'ansA','ansB','ansC', 'ansD', 'correctAns','reactive','user_id','know_id',
    ];

    public function knowledgementAreas()
    {
        return $this->belongsTo('App\KnowledgementArea', 'id','knowledgement_area_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function examns()
    {
        return $this->belongsToMany(Examn::class, 'examn_question');
    }
}
