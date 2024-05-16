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
    public $timestamps = false ;

    
    public function location()
    {
        return $this->hasOne(Location::class);
    }
        public function show()
    {
        return $this->belongsTo(Show::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    protected $table = 'representations';

}
