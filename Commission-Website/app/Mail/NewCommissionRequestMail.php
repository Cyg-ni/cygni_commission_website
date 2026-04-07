<?php

namespace App\Mail;

use App\Models\Commission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewCommissionRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Commission $commission)
    {
    }

    public function build(): self
    {
        return $this->subject('New Commission Request: '.$this->commission->commissioner_name)
            ->view('emails.new-commission-request');
    }
}
