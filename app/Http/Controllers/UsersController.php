<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserCreateRequest;
use App\Repositories\UserRepository as User;
use App\Repositories\SkillRepository as Skill;

class UsersController extends Controller
{
    /**
     * Instancia do repositorio de Users contendo a logica operacional
     */
    protected $users;

    /**
     * Instancia do repositorio de Users contendo a logica operacional
     */
    protected $skillRepository;

    /**
     * Construtor rebendo instancia de UseRespository por injeção de dependencia
     *
     * @param App\Repositories\UserRepository - Instancia do repositorio de users
     */
    public function __construct(User $users, Skill $skillRepository)
    {
        $this->users = $users;
        $this->skillRepository = $skillRepository;
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
        /** Pegando os dados do form em uma variavel para poder modifica-los **/
        $data = $request->all();

        /** Tratando array de skills criando novas se necessário **/
        $this->skillRepository->syncPossiveisNovasSkills($data['skills']);

        /** Chamando metodo para create do UserRepository **/
        $this->users->saveUser();

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
        /** Pegando os dados do form em uma variavel para poder modifica-los **/
        $data = $request->all();

        /** Tratando array de skills criando novas se necessário **/
        $this->skillRepository->syncPossiveisNovasSkills($data['skills']);

        /** Chamando metodo para update do UserRepository **/
        $this->users->updateUser($data);

        session()->flash('alert.message', 'Registro atualizado com sucesso!');
        session()->flash('alert.style', 'success');

        return redirect()->back();
    }
}
