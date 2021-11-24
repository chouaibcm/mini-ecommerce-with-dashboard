<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded=[];
       public function offre()
       {
           return $this->belongsTo(Offre::class);

       }//end fo category
       public function order()
       {
           return $this->belongsTo(Order::class);

       }
       public function user()
       {
        return $this->belongsTo(User::class);

       }//end fo user
}
