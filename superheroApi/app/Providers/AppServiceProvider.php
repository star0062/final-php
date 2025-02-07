<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }
    public function boot(): void
    {
        Vite::prefetch(concurrency: 3);
        $this->loadRoutesFrom(base_path('routes/api.php'));
    }
}
