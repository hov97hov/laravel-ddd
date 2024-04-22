<?php

namespace App\Http\Controllers\ContactForm;

use App\Domain\ContactForm\Interfaces\ContactFormInterface;
use App\Domain\ContactForm\Requests\ContactFormRequest;
use App\Http\Controllers\Controller;

class ContactFormController extends Controller
{
    /**
     * @var ContactFormInterface
     */
    protected ContactFormInterface $ContactFormService;

    /**
     * @param ContactFormInterface $ContactFormService
     */
    public function __construct(ContactFormInterface $ContactFormService)
    {
        $this->ContactFormService = $ContactFormService;
    }

    /**
     * @param ContactFormRequest $request
     * @return void
     */
    public function sendForm(ContactFormRequest $request): void
    {
        $this->ContactFormService->sendForm($request->all());
    }
}
