<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{

    protected $fillable = ['user_id', 'summary'];
    /**
     * Get the user record associated with the curriculum.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Get the academic record associated with the curriculum.
     */
    public function academic()
    {
        return $this->hasOne(\App\Models\Academic::class);
    }

    /**
     * Get the skills records associated with the curriculum.
     */
    public function skills()
    {
        return $this->belongsToMany(\App\Models\Skill::class);
    }

}
