<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function Slider(){
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function AddSlider(){
        return view('admin.slider.create');
    }

    public function StoreSlider(Request $request){
        $slider_image = $request->file('image');

        $name_generate = hexdec(uniqid());
        $img_ext = strtolower($slider_image->getClientOriginalExtension());
        $img_name = $name_generate.'.'.$img_ext;
        $upload_location = 'image/slider/';
        $last_img = $upload_location.$img_name;
        $slider_image -> move($upload_location, $img_name);

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'created_at' => Carbon::now()
        ]);

        return redirect()->route('home.slider')->with('success', 'Slider Inserted successfully');


    }
}
