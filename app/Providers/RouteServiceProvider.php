<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
<<<<<<< HEAD
     * This is used by Laravel authentication to redirect users after login.
=======
     * Typically, users are redirected here after authentication.
>>>>>>> ae799c982f6ba3773d61b0bdf0bd861c2aa844c4
     *
     * @var string
     */
    public const HOME = '/home';

    /**
<<<<<<< HEAD
     * Define your route model bindings, pattern filters, etc.
=======
     * Define your route model bindings, pattern filters, and other route configuration.
>>>>>>> ae799c982f6ba3773d61b0bdf0bd861c2aa844c4
     *
     * @return void
     */
protected $namespace='App\Http\Controllers';
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
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
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
