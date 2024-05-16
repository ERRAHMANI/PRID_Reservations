<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'designation',
        'address',
        'locality_id',
        'website',
        'phone',

    ];
    public $timestamps = false ;


    public function locality()
    {
        return $this->hasOne(Locality::class);
    }
    

    public function representation()
    {
        return $this->belongsTo(Representation::class);
    }
    public function show()
    {
        return $this->belongsTo(Show::class);
    }
    protected $table = 'locations';

}
