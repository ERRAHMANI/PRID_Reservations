<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table =  'types';
    public $timestamps = false ;


    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function artist_types()
    {
        return $this->belongsToMany(Artist_type::class);
    }

    protected $fillable = [
        'type',
    ];

}
