<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessage;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return Contact::all();
    }
    
    public function store()
    { 
        request()->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'content' => 'required',
        ],
        [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required',
            'email.email' => 'Please specify a real email',
            'content.required' => 'Please enter your message.',
        ]);

        Contact::create([
            'name' => request('name'),
            'email' => request('email'),               
            'content' => request('content')              
        ]);
        $contact = [
            'name' => request('name'),
            'email' => request('email'),
            'content' => request('content'),
        ];

        try {
 
            Mail::to('najatt.ismail@gmail.com')->send(new ContactMessage($contact));
            return 'Email sent successfully.';
        } catch (\Exception $e) {
            return 'Failed to send email: ' . $e->getMessage();
        }
    }
}