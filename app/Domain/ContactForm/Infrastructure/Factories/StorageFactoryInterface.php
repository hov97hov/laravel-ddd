<?php

namespace App\Domain\ContactForm\Infrastructure\Factories;

interface StorageFactoryInterface
{
    public function create(string $type);

}
