<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use File;

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

    /**
     * Binding Model Events
     *
     * OBS: Os Model Events só são disparados quando o trigger parte de uma instancia
     * do Model. Se partimos de outro model e modificarmos a relação o evento nao é disparado
     * Ex: App\Models\Photo $photo - $photo->delete() - Dispara o evento ao deletar
     * Ex: App\Models\User $user - $user->fotoAvatar->delete() - Dispara o evento ao deletar
     * Ex: App\Models\User $user - $user->fotoAvatar()->delete() - Não dispara o evento pois estamos na camada do SQL (Query Buider)
     */
    public static function boot()
    {
        parent::boot();

        /** Binding the delete model event to destroy the filesystem archive **/
        static::deleted(function ($photo) {
            File::delete( public_path()  . '/uploads/' . $photo->image_name . '.' . $photo->image_extension);
        });

    }



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
