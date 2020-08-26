<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'mapel', 'user_id', 'file', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
