<?php

namespace App\Mail;

use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Notification extends Mailable
{
    use Queueable, SerializesModels;

    public $dinvo;

    /**
     * Create a new message instance.
     * @param \App\Models\Invoice
     * @return void
     */
    public function __construct(Invoice $dinvo)
    {
        $this->dinvo = $dinvo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->subject("Notifikasi Validasi Pembayaran Bus")

        ->markdown('emails.users');
    }
}
