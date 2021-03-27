<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailRequestCategoryRegister extends Mailable
{
    use Queueable, SerializesModels;
    
    /**
     * Información recibida
     * @var user
     * @var category_name
     */
    public $user;
    public $category_name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user,$category_name)
    {
        $this->user = $user;
        $this->category_name = $category_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->user)
                    ->view('mails.mailRequestCategoryRegister');
    }
}
