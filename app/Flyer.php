<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $table = 'flyers';

    protected $fillable = [
        'country',
        'street',
        'city',
        'zip',
        'state',
        'price',
        'description'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
