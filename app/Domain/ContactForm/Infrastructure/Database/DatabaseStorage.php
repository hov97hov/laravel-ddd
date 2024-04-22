<?php

namespace App\Domain\ContactForm\Infrastructure\Database;

use App\Domain\ContactForm\Domain\Models\ContactForm;

class DatabaseStorage
{
    /**
     * @param array $data
     * @return ContactForm
     */
    public function save(array $data): ContactForm
    {
        return ContactForm::create(array_diff($data, $data['type']));
    }
}
