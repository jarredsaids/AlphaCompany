<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    public function mentor()
    {
        return $this->belongsTo(Soldier::class, 'mentor_id');
    }

    public function senior()
    {
        return $this->belongsTo('App\Senior', 'senior_id');
    }

    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }
}
