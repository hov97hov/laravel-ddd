<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return $this|string
     */
    public function build(): string|static
    {
        try{
            $this->view('mails.contactForm')
                ->with([
                    'data' => $this->data,
                ]);

            return $this;

        }catch (\Exception $exception) {

            return $exception->getMessage();
        }
    }
}
