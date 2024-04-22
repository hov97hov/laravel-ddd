<?php

namespace App\Domain\ContactForm\Services;

use App\Domain\ContactForm\Interfaces\ContactFormInterface;
use App\Domain\ContactForm\Repositories\ContactFormRepository;

class ContactFormService implements ContactFormInterface
{
    /**
     * @var ContactFormRepository
     */
    protected ContactFormRepository $contactFormRepository;

    /**
     * @param ContactFormRepository $contactFormRepository
     */
    public function __construct(ContactFormRepository $contactFormRepository)
    {
        $this->contactFormRepository = $contactFormRepository;
    }

    public function sendForm(array $data)
    {
        $this->contactFormRepository->sendForm($data);
    }
}
