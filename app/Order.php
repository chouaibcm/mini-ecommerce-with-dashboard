<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);

    }//end of user
    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'offre_order')->withPivot('quantity');

    }//end of offres
    public function cards()
    {
        return $this->hasMany(Card::class);

    }
}
