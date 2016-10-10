<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = ['email', 'name', 'photo', 'role_id', 'curriculum_id'];

    /**
     * Get the curriculum record associated with the user.
     */
    public function curriculum()
    {
        return $this->hasOne(\App\Models\Curriculum::class);
    }

    /**
     * Get the role record associated with the user.
     */
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class);
    }

    /**
     * Get the social record associated with the user.
     */
    public function social()
    {
        return $this->hasOne(\App\Models\Social::class);
    }
}
