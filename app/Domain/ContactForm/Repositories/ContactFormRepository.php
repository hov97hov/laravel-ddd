<?php

namespace App\Domain\ContactForm\Repositories;

use App\Jobs\SendContactFormEmailJob;

class ContactFormRepository
{
    public function sendForm(array $data): void
    {
        dispatch(new SendContactFormEmailJob($data));
        dd($data);
    }
}
