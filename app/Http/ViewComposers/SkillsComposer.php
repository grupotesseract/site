<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\SkillRepository as Skills;

class SkillsComposer
{
    protected $skills;
    public function __construct(Skills $skills)
    {
        $this->skills = $skills;
    }

    public function compose(View $view)
    {
        $skills = $this->skills->all();

        $view->with(compact('skills'));
    }
}
