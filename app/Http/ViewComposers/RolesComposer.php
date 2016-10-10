<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\RoleRepository as Roles;

class RolesComposer
{
    protected $roles;
    public function __construct(Roles $roles)
    {
        $this->roles = $roles;
    }

    public function compose(View $view)
    {
        $roles = $this->roles->listByName();

        $view->with(compact('roles'));
    }
}