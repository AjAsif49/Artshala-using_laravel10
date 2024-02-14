<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function Service(){
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    public function AddService(){
        return view('admin.service.create');
    }

    public function StoreService(Request $request){
        $image = $request->file('image');

        $name_gen   = hexdec(uniqid());
        $img_ext    = strtolower($image->getClientOriginalExtension());
        $image_name = $name_gen.'.'.$img_ext;
        $upload_loc = 'image/service/';
        $last_img   = $upload_loc.$image_name;
        $image -> move($upload_loc, $image_name);

        Service::insert([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $last_img,
            'created_at'  => Carbon::now()
        ]);

        return redirect()->route('home.service')->with('success', 'Service Added successfully');
    }

    public function EditService($id){
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }

    public function UpdateService(Request $request, $id){
        $old_image = $request->old_image;

        $image = $request->file('iamge');

        if($image){
        $name_gen   = hexdec(uniqid());
        $img_ext    = strtolower($image->getClientOriginalExtension());
        $image_name = $name_gen.'.'.$img_ext;
        $upload_loc = 'image/service/';
        $last_img   = $upload_loc.$image_name;
        $image -> move($upload_loc, $image_name);
        unlink($old_image);

        Service::find($id)->update([
            'title'       => $request->title,
            'description' => $request->description,
            'image'       => $last_img,
            'created_at'  => Carbon::now()
        ]);

        return redirect()->route('home.service')->with('success', 'Service Updated successfully');

        }else{
        Service::find($id)->update([
            'title'       => $request->title,
            'description' => $request->description,
            'created_at'  => Carbon::now()
        ]);

        return redirect()->route('home.service')->with('success', 'Service Updated successfully');
        }
    }

    public function DeleteService($id){
        $service = Service::find($id);
        $old_image = $service->image;
        unlink($old_image);

        $service->delete();
        return redirect()->route('home.service')->with('success', 'Service Deleted successfully');

    }
}
