<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailSending extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message;
    public $subject;
   // public $file;
    public function __construct($sub, $msg)
    { 
        $this->message=$msg;
        $this->subject=$sub;
       // $this->file=$file;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.index')
          //  ->attach([
           //  'file'=>$this->file   
           // ])
            ->with([
            'sub'=>$this->subject,
            'msg'=>$this->message
        ]);
    }
}
