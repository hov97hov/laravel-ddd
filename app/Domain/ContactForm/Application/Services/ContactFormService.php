<?php

namespace App\Domain\ContactForm\Application\Services;

use App\Domain\ContactForm\Domain\Interfaces\FormContactRepositoryInterface;
use App\Domain\ContactForm\Domain\Models\ContactForm;

class ContactFormService
{
    /**
     * @var FormContactRepositoryInterface
     */
    private FormContactRepositoryInterface $contactFormRepository;

    /**
     * @param FormContactRepositoryInterface $contactFormRepository
     */
    public function __construct(FormContactRepositoryInterface $contactFormRepository)
    {
        $this->contactFormRepository = $contactFormRepository;
    }

    /**
     * @param $data
     * @return ContactForm
     */
    public function createUser($data): ContactForm
    {
        $contactForm = new ContactForm($data);

        $this->contactFormRepository->save($contactForm);

        return $contactForm;
    }
}
