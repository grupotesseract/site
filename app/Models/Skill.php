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

    /**
     * Definindo um acessor para a rota de DELETE
     */
    public function getDeleteUrlAttribute()
    {
        return url('/team-tesseract/skills/' . $this->id);
    }


}
