<?php

namespace App\Domain\ContactForm\Infrastructure;

use App\Domain\ContactForm\Domain\Interfaces\FormContactRepositoryInterface;
use App\Domain\ContactForm\Domain\Models\ContactForm;

class ContactFormRepository implements FormContactRepositoryInterface
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
