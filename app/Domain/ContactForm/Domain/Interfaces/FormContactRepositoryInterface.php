<?php

namespace App\Domain\ContactForm\Domain\Interfaces;

use App\Domain\ContactForm\Domain\Models\ContactForm;

interface FormContactRepositoryInterface
{
    /**
     * @param array $data
     * @return ContactForm
     */
    public function save(array $data): ContactForm;

}
