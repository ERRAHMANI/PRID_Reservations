<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;
    protected $table = 'localities';
    public $timestamps = false ;


    public function location()
    {
        return $this->belongsToMany(Location::class);
    }
    protected $fillable = [
        'postal_code',
        'locality',

    ];
    //code a completer

}
