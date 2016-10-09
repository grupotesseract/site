<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\SocialRepository as Socials;

class SocialsComposer
{
    protected $socials;
    public function __construct(Socials $socials)
    {
        $this->socials = $socials;
    }

    public function compose(View $view)
    {
        $socials = $this->socials->getFields();

        $view->with(compact('socials'));
    }
}