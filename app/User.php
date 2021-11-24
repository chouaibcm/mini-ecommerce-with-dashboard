<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','poche', 'commandes',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role=='admin';
    }//end of isadmin

    public function orders()
    {
        return $this->hasMany(Order::class);

    }//end of orders
    public function cards()
    {
        return $this->hasMany(Card::class);

    }//end of cards
   public static function boot()
{
    parent::boot();

    self::creating(function ($model) {
        $model->id_c= IdGenerator::generate(['table' => 'users', 'length' => 10, 'field' => 'id_c','prefix' =>'C-']);
    });
}
}
