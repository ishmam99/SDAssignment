<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\EmailSending;
class EmailController extends Controller
{
    public function send(Request $request)
    {
        $dest_email=$request->email;
        $sub=$request->subject;
        $msg=$request->message;
       // $file=$request->file->getRealPath();
        Mail::to($dest_email)->send(new EmailSending($sub,$msg));//,$file));
    }
    public function create()
    {
        return view('mail.create');
    }
    public function ajax()
    {
        return view('ajax');
    }
}
