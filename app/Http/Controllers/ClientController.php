<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function Client(){
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }

    public function AddClient(){
        return view('admin.client.create');
    }

    public function StoreClient(Request $request){
        $client_image = $request->file('image');

        $name_gen     = hexdec(uniqid());
        $image_ext    = strtolower($client_image->getClientOriginalExtension());
        $image_name   = $name_gen.'.'.$image_ext;
        $upload_loc   = 'image/client/'; 
        $last_image   = $upload_loc.$image_name;
        $client_image -> move($upload_loc, $image_name);

        Client::insert([
            'title'      => $request->title,
            'image'      => $last_image,
            'created_at' => Carbon::now() 
        ]);
        return redirect()-> route('home.client')->with('success', 'client added successfully');
    }

    public function EditClient($id){

        $client = Client::find($id);
        return view('admin.client.edit', compact('client'));
    }

    public function UpdateClient(Request $request, $id){
        $old_image = $request->old_image;

        $client_image = $request->file('image');

        if($client_image){
            $name_gen     = hexdec(uniqid());
            $image_ext    = strtolower($client_image->getClientOriginalExtension());
            $image_name   = $name_gen.'.'.$image_ext;
            $upload_loc   = 'image/client/'; 
            $last_image   = $upload_loc.$image_name;
            $client_image -> move($upload_loc, $image_name);

            unlink($old_image);

            Client::find($id)->update([
                'title'      => $request->title,
                'image'      => $last_image,
            ]);
            return redirect()-> route('home.client')->with('success', 'client updated successfully');
            }else{
                Client::find($id)->update([
                    'title'      => $request->title,
                ]);
            return redirect()-> route('home.client')->with('success', 'client updated successfully');

            }
    }

    public function DeleteClient($id){
        $client = Client::find($id);
        $client_image = $client->image;
        unlink($client_image);

        $client->delete();

        return redirect()-> route('home.client')->with('success', 'client deleted successfully');
    }
}
