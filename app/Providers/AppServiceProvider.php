<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\Repositories\ { CategoryRepository, AlbumRepository, CameraRepository };

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if ('admin', function () {
            return auth ()->check () && auth ()->user ()->admin;
        });

        Blade::if ('maintenance', function () {
            return auth ()->check () && auth ()->user ()->admin && app()->isDownForMaintenance();
        });

        Blade::if ('adminOrOwner', function ($id) {
            return auth ()->check () && (auth ()->id () === $id || auth ()->user ()->admin);
        });

        if (request ()->server ("SCRIPT_NAME") !== 'artisan') {

            view ()->share ('categories', resolve(CategoryRepository::class)->getAll());

            view ()->composer('layouts.app', function ($view)
            {
                if(auth()->check()) {
                    $albums = resolve (AlbumRepository::class)->getByUser(auth()->id());
                    if($albums->isNotEmpty()) {
                        $view->with('albums', $albums);
                    }
                }
            });
            view()->share('cameras', resolve(CameraRepository::class)->getAll());
        }

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
