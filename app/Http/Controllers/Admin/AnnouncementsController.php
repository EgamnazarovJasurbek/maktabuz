<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcements;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcements::paginate(5);
        return view('admin.announcements.index',compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_oz' => "required", 
            'title_uz' => "required", 
            'title_ru' => "required", 
            'title_en' => "required", 
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
            'image' => "required",  
              
        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('elon/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Announcements::create($requestData);
        return redirect()->route('admin.announcements.index')->with('success', 'Announcements created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $announcement = Announcements::findOrFail($id);
        return view('admin.announcements.show',compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $announcement = Announcements::findOrFail($id);
        return view('admin.announcements.edit',compact('announcement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'title_oz' => "required", 
            'title_uz' => "required", 
            'title_ru' => "required", 
            'title_en' => "required", 
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
            'image' => "required",  
              
        ]);
        $announcements = Announcements::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('elon/images/'.$announcements->image)){
                File::delete('elon/images/'.$announcements->image);  
            } 
            $file = $request->file('image');
            $announcements->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('elon/images/'),$announcements->image);
            $request['image']=$announcements->image;
        }
        $announcements->update([
           "title_oz" =>$request->title_oz,
           "title_uz" =>$request->title_uz,
           "title_ru" =>$request->title_ru,
           "title_en" =>$request->title_en,
            "body_oz" =>$request->body_oz,
            "body_uz" =>$request->body_uz, 
            "body_ru" =>$request->body_ru, 
            "body_en" =>$request->body_en, 
            "image" =>$announcements->image,
        ]);
        return redirect()->route('admin.announcements.index')->with('success','Announcements updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $announcements = Announcements::findOrFail($id);
        if(File::exists('elon/images/'.$announcements->image)){
            File::delete('elon/images/'.$announcements->image);  
        }
        $announcements->delete();
        return redirect()->route('admin.announcements.index')->with('success','Announcements deleted successfully!');
    }
}
