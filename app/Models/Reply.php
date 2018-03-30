<?php

namespace App\Models;

class Reply extends Model
{
    protected $fillable = ['content'];

    public function topic()
    {
        return $this->belongsTo(topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
