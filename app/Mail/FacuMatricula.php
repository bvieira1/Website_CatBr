<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FacuMatricula extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->replyTo($this->data['reply_email'], $this->data['reply_name'])
        ->to(env('MAIL_FROM_ADDRESS_FACU'), env('MAIL_FROM_NAME_FACU'))
        ->from(env('MAIL_FROM_ADDRESS_FACU'), env('MAIL_FROM_NAME_FACU'))
        ->markdown('email.facuMatricula', [
            'reply_name' => $this->data['reply_name'],
            'reply_email' => $this->data['reply_email'],
            'cell' => $this->data['cell'],
            'course' => $this->data['course'],
            'message' => $this->data['message']
        ]);
    }
}
