<?php

namespace App\Http\Controllers;

use App\Mail\FormulaireContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        $contenuEmail = [
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('jeteste@gmail.com')->send(new FormulaireContact($contenuEmail));

        return "Message Envoyé";
    }
}
