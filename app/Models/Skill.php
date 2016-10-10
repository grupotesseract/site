<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];
    /**
     * Get the curriculums records associated with the skill.
     */
    public function curriculums()
    {
        return $this->belongsToMany(\App\Models\Curriculum::class);
    }

}
