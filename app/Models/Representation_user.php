<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representation_user extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'representation_id',
        'user_id',
        'place',
    ];
    public $timestamps = false ;

    protected $table = 'representation_user';

}
