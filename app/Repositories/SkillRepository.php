<?php

namespace App\Repositories;

use App\Models\Skill;

class SkillRepository
{
    /**
     * Listando skills para o select2
     * @return Array coma as skills [name => id]
     */
    public function listByName()
    {
        return Skill::orderBy('name')->pluck('name', 'id');
    }

    public function saveSkill($skill)
    {
        return Skill::create($skill);
    }

    /**
     * Metodo para syncronizar criando nova skills se necessário
     *
     * @param &$arraySkills - array passado por referencia que sera tratado com as novas skills
     */
    public function syncPossiveisNovasSkills(&$arraySkills)
    {
        /** Iterando sob o array de Skills ['key' => ID] **/
        foreach ($arraySkills as $key => $skill) {

            /** Se o valor de ID não for numerico entao é uma nova Skill **/
            if ( !is_numeric($skill) ) {
                $Skill = $this->saveSkill(['name' => $skill]);
                $arraySkills[$key] = $Skill->id;
            }
        }
    }


}
