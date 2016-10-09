<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    protected $fillable = ['institution', 'course', 'degree'];

    /**
     * Get the curriculum record associated with the academic.
     */
    public function curriculum()
    {
        return $this->belongsTo(\App\Models\Curriculum::class);
    }
}
