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

    /**
     * Rota que serve a view com o formulario para a criacao de um User
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Metodo que recebe a request de criacao de um user
     * @param $request - Request contendo a logica de validação da criacao de um User
     */
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

    /**
     * Rota para servir a view de editar um User
     */
    public function edit($userId)
    {
        $user = $this->users->findById($userId);
        return view('users.edit', compact('user'));
    }

    /**
     * Rota que recebe a request com os novos dados vindos da ediçao de um User
     * @param $request - Request contendo a logica de validacao para a edicao de um User
     */
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


    /**
     * Metodo para servir a view para busca de users que tenham determinadas Skills
     */
    public function getBuscaPorSkills()
    {
        return view('busca.users.skills');
    }

    /**
     * Metodo para servir usuários que tenham determinadas Skills por POST
     * @param $request - Request contendo as skills e checkbox para determinar se a busca é AND ou OR
     */
    public function postBuscaPorSkills(Request $request)
    {
        $users = $this->users->getBySkills($request->skills, $request->mustMatch);
        return view('busca.users.skills')
            ->with('users', $users)
            ->with('currentSkills', $request->skills);
    }
}
