<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => "required",  
        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('galleries/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Gallery::create($requestData);
        return redirect()->route('admin.galleries.index')->with('success', 'Galleries created succuessfuly'); 
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
        $gallery = Gallery::findOrFail($id);
        return view('admin.galleries.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'image' => "required",  
        ]);
        $galleries = Gallery::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('galleries/images/'.$galleries->image)){
                File::delete('galleries/images/'.$galleries->image);  
            } 
            $file = $request->file('image');
            $galleries->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('galleries/images/'),$galleries->image);
            $request['image']=$galleries->image;
        }
        $galleries->update([
             "image" =>$galleries->image,
         ]);
         return redirect()->route('admin.galleries.index')->with('success', 'Galleries updated succuessfuly'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galleries = Gallery::findOrFail($id);
        if(File::exists('galleries/images/'.$galleries->image)){
            File::delete('galleries/images/'.$galleries->image);  
        }
        $galleries->delete();
        return redirect()->route('admin.galleries.index')->with('success','Galleries deleted successfully!');
    }
}
