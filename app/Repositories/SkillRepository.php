<?php

namespace App\Repositories;

use App\Models\Skill;

class SkillRepository
{
    public function listByName()
    {
        return Skill::orderBy('name')->pluck('name', 'id');
    }

    public function saveSkill($skill)
    {
        return Skill::create($skill);
    }
}
