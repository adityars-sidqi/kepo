<?php

namespace App\Mail;

use App\Models\Organisasi;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrganisasiCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $organisasi;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Organisasi $organisasi)
    {
        $this->organisasi = $organisasi;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.organisasicreated')->subject('Verify your email address');
    }
}
