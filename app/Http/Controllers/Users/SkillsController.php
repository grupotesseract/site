<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

use App\Http\Requests\SkillRequest;
use App\Http\Controllers\Controller;
use App\Repositories\SkillRepository as Skills;

class SkillsController extends Controller
{
    protected $skills;
    public function __construct(Skills $skills)
    {
        $this->skills = $skills;
    }

    public function index()
    {
        return view('users.skills.index');
    }

    public function store(SkillRequest $request)
    {
        $this->skills->saveSkill($request->all());

        session()->flash('alert.message', 'Registro salvo com sucesso!');
        session()->flash('alert.style', 'success');

        return redirect()->back();
    }
}
