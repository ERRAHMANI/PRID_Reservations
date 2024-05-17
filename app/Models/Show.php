<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class show extends Model
{
    use HasFactory;
    protected $table = 'shows';
    public function representation()
    {
        return $this->belongsTo(Representation::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function artist_types()
    {
        return $this->belongsToMany(Artist_type::class);
    }
    public $timestamps = false ;

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
