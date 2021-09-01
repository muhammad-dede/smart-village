<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'source',
        'author',
        'title',
        'description',
        'url',
        'urlToImage',
        'publishedAt',
        'content',
        'content',
        'sts_aktif',
        'id',
    ];
}
