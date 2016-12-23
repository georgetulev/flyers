<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;


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

    public function getPriceAttribute($price)
    {
        return '$' . number_format($price);
    }

    /**
     * Scope query to those located at a given address.
     *
     * @param string $zip
     * @param string $street
     * @return Builder
     */
    public static function locatedAt($zip, $street)
    {
        $street = str_replace('-', ' ', $street);

        // ToDo NOT_TO_FORGET!  If ModelNotFoundException is thrown -> we must redirect or .... sth.else!
        return static::where('zip', $zip)->where('street', $street)->firstOrFail();
    }

    /**
     * @param Photo $photo
     * @return Model
     */
    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
