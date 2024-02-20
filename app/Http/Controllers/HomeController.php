<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Contact(){
    $contact  = Contact::latest()->first();
    $services = Service::all();

        return view('web.pages.contact', compact('contact', 'services'));
    }
}
