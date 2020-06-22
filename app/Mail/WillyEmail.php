<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WillyEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('pengirim@email.com')
                    // ->cc(['upscale.campaign61@gmail.com'])
                    ->view('emailku')
                    ->attach(public_path('\COMPANY PROFILE.pdf'), [
                        'as' => 'COMPANY PROFILE.pdf',
                        'mime' => 'application/pdf',
                    ]);
               
    //                 ->with(
    //                     [
    //                         'nama' => 'Willy gurning',
    //                         'posisi' => 'bisdev',
    //                     ]);
     }
}
