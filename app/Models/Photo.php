<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /** Array com os campos permitidos no mass-assignment (Model::create / Model::update) **/
    protected $fillable = [
        'owner_id',
        'owner_type',
        'image_name',
        'image_path',
        'image_extension'
    ];

    /**********************
     * Model Relations
     ************************/

    /**
     * Relação polimorfica para que uma foto
     * possa pertencer a um mais de 1 tipo de entidade
     */
    public function owner()
    {
        return $this->morphTo();
    }


    /**********************
     * Acessors / Mutators
     ************************/

    /**
     * Definindo um acessor para a URL da foto
     */
    public function getURLAttribute()
    {
        return url( '/uploads/' . $this->image_name . '.' . $this->image_extension );
    }



}
