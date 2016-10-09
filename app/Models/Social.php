<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $fillable = ['user_id', 'github', 'facebook', 'google-plus', 'twitter', 'linkedin', 'portfolio'];

    /**
     * Get the user record associated with the social media.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
