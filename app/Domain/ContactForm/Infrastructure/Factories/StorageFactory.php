<?php

namespace App\Domain\ContactForm\Infrastructure\Factories;

use App\Domain\ContactForm\Infrastructure\Database\DatabaseStorage;
use App\Domain\ContactForm\Infrastructure\Email\EmailStorage;

class StorageFactory implements StorageFactoryInterface
{
    /**
     * @param string $type
     * @return EmailStorage|DatabaseStorage
     */
    public function create(string $type): EmailStorage|DatabaseStorage
    {
        return match ($type) {
            'database' => new DatabaseStorage(),
            'email' => new EmailStorage(),
            default => throw new \InvalidArgumentException("Unsupported storage type: $type"),
        };
    }
}
