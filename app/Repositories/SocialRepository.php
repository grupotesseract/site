<?php

namespace App\Repositories;

use App\Models\Social;

class SocialRepository
{
    public function getFields()
    {
        return collect((new Social)
            ->getFillable())
            ->filter(function ($item) {
                return !str_contains($item, '_id');
            });
    }
}
