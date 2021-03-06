<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\RolesComposer;
use App\Http\ViewComposers\SkillsComposer;
use App\Http\ViewComposers\SocialsComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['users.roles.index', 'users.create', 'users.edit'], RolesComposer::class);
        view()->composer(['users.skills.index', 'users.create', 'users.edit', 'busca.users.skills'], SkillsComposer::class);
        view()->composer(['users.create', 'users.edit'], SocialsComposer::class);
        view()->composer(['home.team.index'], 'App\Repositories\UserRepository@injectAllUsers');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Interfaces\PhotoRepositoryInterface',
            'App\Repositories\PhotoRepository'
        );
    }
}
