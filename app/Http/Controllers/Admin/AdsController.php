<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::all();
        return view('admin.ads.index',compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ads.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "title" => "required",
            "image" => "required",
            "url" => "required",
          
        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('ads/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Ad::create($requestData);
        return redirect()->route('admin.ads.index')->with('success', 'Reklama created succuessfuly'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ads = Ad::first();
        return view('admin.ads.edit',compact('ads'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "title" => "required",
            "image" => "required",
            "url" => "required",
          
        ]);
        $ads = Ad::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('ads/images/'.$ads->image)){
                File::delete('ads/images/'.$ads->image);  
            } 
            $file = $request->file('image');
            $ads->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('ads/images/'),$ads->image);
            $request['image']=$ads->image;
        }
        $ads->update([
            "title" =>$request->title,
            "url" =>$request->url,
            "image" =>$ads->image,
         ]);
         return redirect()->route('admin.ads.index')->with('success','Ads updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ads = Ad::findOrFail($id);
        // dd($ads);
        if(File::exists('ads/images/'.$ads->image)){
            File::delete('ads/images/'.$ads->image);  
        }
        $ads->delete();
        return redirect()->route('admin.ads.index')->with('success','Ads deleted successfully!');
    }
}
