<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class userMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $content;
    public $email;
        
    /**
     * Create a new content instance.
     *
     * @return void
     */
    public function __construct($content, $email)
    {
        $this->content = $content;
        $this->email = $email;        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('liv.ratsimbazafy@gmail.com')
            ->markdown('mails.clientMessage');
    }
}
