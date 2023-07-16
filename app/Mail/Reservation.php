<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Reservation extends Mailable
{
    use Queueable, SerializesModels;

    public $checkin ;
    public $checkout;

    public $checkin_time;
    public $persons;
    public $phone_number;
    public function __construct($checkin , $checkout , $checkin_time , $persons, $phone_number)
    {
        $this->persons = $persons;
        $this->checkin_time = $checkin_time;
        $this->checkin = $checkin;
        $this->checkout = $checkout;
        $this->phone_number = $phone_number;
    }

    public function build()
    {
        return $this->subject('New Booking on Website')
            ->view('reservation_email');
    }
}
