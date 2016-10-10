<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    public function listByName()
    {
        return Role::orderBy('name')->pluck('name', 'id');
    }

    public function saveRole($role)
    {
        return Role::create($role);
    }
}
