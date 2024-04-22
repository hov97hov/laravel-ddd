<?php

namespace App\Providers;

use App\Domain\ContactForm\Interfaces\ContactFormInterface;
use App\Domain\ContactForm\Services\ContactFormService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ContactFormInterface::class, ContactFormService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
