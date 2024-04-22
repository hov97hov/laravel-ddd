<?php

namespace App\Infrastructure\Providers;

use App\Domain\ContactForm\Domain\Interfaces\FormContactRepositoryInterface;
use App\Domain\ContactForm\Infrastructure\ContactFormRepository;
use App\Domain\ContactForm\Infrastructure\Factories\StorageFactory;
use App\Domain\ContactForm\Infrastructure\Factories\StorageFactoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FormContactRepositoryInterface::class, ContactFormRepository::class);
        $this->app->bind(StorageFactoryInterface::class, StorageFactory::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
