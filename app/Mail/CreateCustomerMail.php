<?php

namespace App\Mail;

use App\Models\admin\account;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class CreateCustomerMail extends Mailable
{
    use Queueable, SerializesModels;
    private $Detail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($Detail)
    {
        $this->Detail = $Detail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $mailFrom = account::where('id','=', session('LoggedAdmin'))->first()->Email;
        return $this
            ->from($mailFrom)
            ->markdown('mail.createCustomer')->with([
            'account' => $this->Detail['account'],
            'password' => $this->Detail['password'],
        ]);
    }
}
