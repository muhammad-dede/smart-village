<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        ''
    ];
}
