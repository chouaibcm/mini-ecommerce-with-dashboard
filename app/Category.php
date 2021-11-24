<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name', 'image'
    ];
    protected $appends = ['image_path'];
    public function getImagePathAttribute()
    {
        return asset('uploads/category_images/' . $this->image);

    }//end of image path attribute
    public function offres()
    {
        return $this->hasMany(Offre::class);

    }

}
