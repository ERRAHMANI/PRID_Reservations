<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist_type_show extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_type_show',
        'show_id',

    ];
    public $timestamps = false ;

    protected $table = 'artist_type_show';
}
