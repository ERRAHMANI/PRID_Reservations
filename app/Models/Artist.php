<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname'];
    public $timestamps = false ;


    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function artist_types()
    {
        return $this->belongsToMany(Artist_type::class);
    }

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artists';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
}
