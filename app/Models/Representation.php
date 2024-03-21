<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representation extends Model
{
    use HasFactory;
    protected $fillable = [
        'show_id',
        'when',
        'location_id',
    ];
    
    public function location()
    {
        return $this->hasOne(Location::class);
    }
    protected $table = 'representation';

}
