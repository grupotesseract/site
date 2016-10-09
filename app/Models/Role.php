<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    /**
     * Get the user record associated with the role.
     */
    public function users()
    {
        return $this->hasMany(\App\Models\User::class);
    }
}
