<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * Returns relation to the Users class
     */

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
