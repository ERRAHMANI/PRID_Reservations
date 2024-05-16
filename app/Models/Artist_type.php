<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'type_id',

    ];
    public $timestamps = false ;


    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function shows()
    {
        return $this->belongsToMany(Show::class);
    }

    protected $table = 'artist_type';

}
