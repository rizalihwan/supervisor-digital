<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'nama_guru', 'mapel', 'user_id', 'file', 'status'
    ];
}
