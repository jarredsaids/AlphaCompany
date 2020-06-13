<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    public function soldier()
    {
        return $this->belongsTo(Soldier::class);
    }

    public function scopeSenior($query)
    {
        return $query->whereIn('rank_id', [6, 7, 8]);
    }
}
