<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const HOME = '/home';

    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {

            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));
            // rutas de usuarios
            Route::middleware('web', 'auth', 'nocache')
                ->prefix('usuarios')
                ->namespace($this->namespace)
                ->group(base_path('routes/usuarios.php'));
            // rutas auth
            Route::middleware('web')
                ->prefix('auth')
                ->namespace($this->namespace)
                ->group(base_path('routes/auth.php'));
            // rutas helper (solo tiene home)
            Route::middleware('web', 'auth', 'nocache')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
            // rutas categorias
            Route::middleware('web', 'auth', 'nocache')
                ->prefix('categorias')
                ->namespace($this->namespace)
                ->group(base_path('routes/categorias.php'));
            // rutas proveedores
            Route::middleware('web', 'auth', 'nocache')
                ->prefix('proveedores')
                ->namespace($this->namespace)
                ->group(base_path('routes/proveedores.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }
}
