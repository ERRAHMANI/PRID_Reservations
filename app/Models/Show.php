<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class show extends Model
{
    use HasFactory;
    protected $table = 'show';
    public function representation()
    {
        return $this->belongsTo(Representation::class);
    }
    public function localition()
    {
        return $this->hasOne(Location::class);
    }
    protected $fillable = [
        'slug',
        'title',
        'description',
        'poster_url',
        'location_id',
        'bookable',
        'price',

    ];

}
