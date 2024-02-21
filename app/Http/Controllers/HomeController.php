<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Message;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Contact(){
    $contact  = Contact::latest()->first();
    $services = Service::all();

        return view('web.pages.contact', compact('contact', 'services'));
    }

    public function Message(Request $request){
        Message::insert([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now()
        ]);
        return response('message sent!');
    }

    public function AllMessages(){
        $messages = Message::all();
        return view('admin.message.index', compact('messages'));
    }

    public function DeleteMessages($id){
        Message::find($id)->delete();
        return redirect()->route('home.message')->with('success', 'Message deleted successfully');

        

    }
}
