<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\RoleRepository as Roles;

class RolesController extends Controller
{
    protected $roles;
    public function __construct(Roles $roles)
    {
        $this->roles = $roles;
    }

    public function index()
    {
        return view('users.roles.index');
    }

    public function store(Request $request)
    {
        $this->roles->saveRole($request->all());

        session()->flash('alert.message', 'Registro salvo com sucesso!');
        session()->flash('alert.style', 'success');

        return redirect()->back();
    }
}
