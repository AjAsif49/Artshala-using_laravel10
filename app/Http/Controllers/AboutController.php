<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redis;

class AboutController extends Controller
{
    public function About(){
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function AddAbout(){
        return view('admin.about.create');
    }

    public function StoreAbout(Request $request){
        About::insert([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('home.about')->with('success', 'About Inserted successfully');
    }

    public function EditAbout($id){
        $about = About::find($id);
        return view('admin.about.edit', compact('about'));
    }

    public function UpdateAbout(Request $request, $id){
        About::find($id)->update([
            'title' => $request->title,
            'short_des' => $request->short_des,
            'long_des' => $request->long_des,
            'created_at' => Carbon::now()
        ]);
        return redirect()->route('home.about')->with('success', 'About Updated successfully');
    }

    public function DeleteAbout($id){
        About::find($id)->delete();
        return redirect()->route('home.about')->with('success', 'About Deleted successfully');
    }
    
}
