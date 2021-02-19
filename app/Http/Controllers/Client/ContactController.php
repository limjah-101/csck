<?php

namespace App\Http\Controllers\Client;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\userMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  
     /**
     * contact page
     */
    public function contactPage(Request $request) {
        
        if($request->exists('send_message')) {
            
            $this->validate($request, [
                'name' => 'required',
                'email' => 'email|required',
                'message' => 'required|min:5'
            ], 
            [
                'name.required' => 'Ce champs est obligatoire',
                'email.required' => 'Ce champs est obligatoire',
                'email.email' => 'Saisir une adresse email valide',
                'message.required' => 'Ce champs est obligatoire',
                'message.min' => 'Saisir au moins 5 caractères',
            ]);


            Mail::to($request->email)->send(new userMessage($request->message, $request->email));
            
            return redirect()->back()->with('success', 'Votre message à bien été envoyé !');
        }
        return view('client.contact.contact_us');
    }

    
}
