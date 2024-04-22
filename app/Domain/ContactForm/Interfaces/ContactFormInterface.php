<?php

namespace App\Domain\ContactForm\Interfaces;

interface ContactFormInterface
{
    public function sendForm(array $data);
}
