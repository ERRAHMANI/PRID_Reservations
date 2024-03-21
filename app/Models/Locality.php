<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    use HasFactory;
    protected $table = 'locality';

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    protected $fillable = [
        'postal_code',
        'locality',

    ];

}
