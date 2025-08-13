<?php

     namespace App\Providers;

     use Illuminate\Cache\RateLimiting\Limit;
     use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
     use Illuminate\Http\Request;
     use Illuminate\Support\Facades\RateLimiter;
     use Illuminate\Support\Facades\Route;

     class OtpServiceProvider extends ServiceProvider
     {
         public function boot()
         {
             $this->configureRateLimiting();

             $this->routes(function () {
                 Route::middleware('web')
                     ->group(base_path('routes/web.php'));
             });
         }

         protected function configureRateLimiting()
         {
             RateLimiter::for('otp', function (Request $request) {
                 return Limit::perMinute(5)->by($request->ip());
             });
         }
     }