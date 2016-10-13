<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Curriculum;
use App\Models\Academic;
use App\Models\Social;

class UserRepository
{

    public function getAllPaginated($perPage)
    {
        return User::paginate($perPage);
    }

    public function findById($userId)
    {
        return User::find($userId);
    }

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

    public function updateUser($data)
    {
        $user = User::findOrFail($data['user_id']);

        $user->update($data);
        $user->social->update($data['social']);
        $user->curriculum->update($data);
        $user->curriculum->academic->update($data);
        $user->curriculum->skills()->sync($data['skills']);

        return $user;
    }
}
