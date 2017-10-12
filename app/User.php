<?php

namespace App;

use App\Group;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
     * returns relaiton to the Group Model
     */

    public function group()
    {
        return $this->belongsToMany(Group::class);
    }

    public function getAll()
    {
        return $this->all();
    }
}
