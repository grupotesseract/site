<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Curriculum;
use App\Models\Academic;
use App\Models\Social;

/**
 * Repositorio para centralizar a logica e operacoes com Users
 */
class UserRepository
{

    /**
     * Metodo para injetar todas os users pelo view composer
     */
    public function injectAllUsers($view)
    {
        return $view->with( 'Users', User::inRandomOrder()->get()->shuffle() );
    }

    /**
     * Retorna um X de users
     *
     * @param $perPage - Numero de Uses por Pagina
     */
    public function getAllPaginated($perPage)
    {
        return User::paginate($perPage);
    }

    /**
     * Encapsulando o uso do find do Model para centralizar possiveis
     * erros e possibilitar um tratamento customizado
     *
     * @param $userId - ID do User
     * @return App\Models\User - instancia de User
     */
    public function findById($userId)
    {
        return User::find($userId);
    }

    /**
     * Metodo para a criacao de users, associando as respectivas relações
     *
     * @param $data - Data do form de create de Users
     * @return App\Models\User - Instancia recem criada de User
     *
     * @todo Utilizar da Form Request Validation
     */
    public function saveUser($data)
    {
        //criar user
        $user = (new User)->fill($data);
        //associar a uma role
        $user->role()->associate($data['role']);
        $savedUser = User::create($user->toArray());
        //associar a um social, criando-o ao mesmo tempo
        $savedUser->social()->create($data['social']);

        // criar um curriculum
        $savedCurriculum = $savedUser->curriculum()->create($data);
        // criar um academic associado a este curriculum
        $savedCurriculum->academic()->create($data);
        // associar a varias skills
        $savedCurriculum->skills()->attach($data['skills']);

        return $savedUser;
    }

    /**
     * Metodo para realizar o update dos dados de um User
     *
     * @param $data - data do form de edit de Users
     * @return App\Models\User - uma instancia atualizada do User em questão
     *
     * @todo Utilizar do Form Request Validation
     */
    public function updateUser($data)
    {
        $user = User::findOrFail($data['id']);

        $user->update($data);
        $user->social->update($data['social']);
        $user->curriculum->update($data);
        $user->curriculum->academic->update($data);
        $user->curriculum->skills()->sync($data['skills']);

        return $user;
    }

    /**
     * Metodo para remover a fotoAvatar atual de um user caso existir
     *
     * @param $user_id - ID do usuario que tera o avatar deletado
     */
    public function deleteFotoAvatarUsuario($user_id)
    {
        $user = $this->findById($user_id);
        $existeFoto = $user->fotoAvatar;

        if ( $existeFoto ){
            /** delete() a partir do Model p/ disparar o ModelEvent e remover o arquivo do filesystem **/
            $user->fotoAvatar->delete();
        }

    }

    /**
     * Metodo para recuperar Users pelas suas Skills
     * @param $arraySkills - Array com os ids das skills
     * @return Collection de Users
     */
    public function getBySkills($arraySkills)
    {
        /** Iterando sob as skills, obtendo os usuarios para cada uma e fazendo interseccao */
        foreach ($arraySkills as $key => $skillID) {

            /** Pegando todos os users que tenham essa skill **/
            $usersComEssaSkill = User::whereHas('curriculum', function($curriculum) use ($skillID) {

                /** Todos os curriculumns que tenham essas skills **/
                $curriculum->whereHas('skills', function ($skills) use ($skillID) {
                    $skills->where('skills.id', $skillID);
                });

            })->get();

            /** Se for a primeira iteracao apenas pegar o resultado **/
            if ( $key == 0 ) {
                $users = $usersComEssaSkill;
            }

            /** Se nao for, pegar intersecao com o resultado anterior **/
            else {
                $users = $users->intersect($usersComEssaSkill);
            }
        }

        return $users;
    }
}


