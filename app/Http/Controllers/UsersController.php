<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserCreateRequest;
use App\Repositories\UserRepository as User;

class UsersController extends Controller
{
    /**
     * Instancia do repositorio de Users contendo a logica operacional
     */
    protected $users;

    /**
     * Construtor rebendo instancia de UseRespository por injeção de dependencia
     *
     * @param App\Repositories\UserRepository - Instancia do repositorio de users
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        $users = $this->users->getAllPaginated(15);

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserCreateRequest $request)
    {
        $this->users->saveUser($request->all());

        session()->flash('alert.message', 'Registro salvo com sucesso!');
        session()->flash('alert.style', 'success');

        return redirect()->back();
    }

    public function edit($userId)
    {
        $user = $this->users->findById($userId);
        return view('users.edit', compact('user'));
    }

    public function update(UserEditRequest $request)
    {
        $this->users->updateUser($request->all());

        session()->flash('alert.message', 'Registro atualizado com sucesso!');
        session()->flash('alert.style', 'success');

        return redirect()->back();
    }
}
