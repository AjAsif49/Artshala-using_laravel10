<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(){
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function AddContact(){
        return view('admin.contact.create');
    }

    public function StoreContact(Request $request){
        Contact::insert([
            'company_name'  => $request->company_name,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'email'         => $request->email,
            'created_at'    => Carbon::now()
        ]);
        return redirect()->route('home.contact')->with('success', 'Contact added successfully');
    }

    public function EditContact($id){
        $contact = Contact::find($id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function UpdateContact(Request $request, $id){
        Contact::find($id)->update([
            'company_name'  => $request->company_name,
            'address'       => $request->address,
            'phone'         => $request->phone,
            'email'         => $request->email,
        ]);
        return redirect()->route('home.contact')->with('success', 'Contact updated successfully');
    }

    public function DeleteContact($id){
        $contact = Contact::find($id)->delete();
        return redirect()->route('home.contact')->with('success', 'Contact deleted successfully');
    }

}
