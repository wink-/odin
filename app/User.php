<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

   /**
     * The database connection used by the model.
     *
     * @var string
     */
    //protected $connection = "wipsys";

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pluto_users';

   /**
     * The primary key used by the model.
     *
     * @var string
     */
    //protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
