<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
       protected $guarded=[];
       public function category()
       {
           return $this->belongsTo(Category::class);

       }//end fo category
       public function orders()
       {
           return $this->belongsToMany(Order::class, 'offre_order');
   
       }//end of orders
       public function cards()
       {
        return $this->hasMany(Card::class);
       }//end of Cards
}
