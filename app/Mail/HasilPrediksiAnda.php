<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HasilPrediksiAnda extends Mailable
{
    use Queueable, SerializesModels;

    protected $result;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($result)
    {
        $this->result = $result->load('user', 'criterias');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(config('mail.from.address'))
                    ->markdown('mail.hasil-prediksi-anda', [
                        'result' => $this->result,
                        'url' => config('app.url') . '/diagnosis',
                    ]);
    }
}
