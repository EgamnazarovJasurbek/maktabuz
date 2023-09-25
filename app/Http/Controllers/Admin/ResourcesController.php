<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resources = Resource::paginate(5);
        return view('admin.resources.index',compact('resources'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name_oz" => "required",
            "name_uz" => "required",
            "name_ru" => "required",
            "name_en" => "required",
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
            'info_oz' => "required",
            'info_uz' => "required",
            'info_ru' => "required",
            'info_en' => "required",
            'image' => "required",  
            'link' => "required",  
            'url' => "required",     
        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('resources/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        if ($request->hasFile('link')) {
            $file = $request->file('link');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('resources/links/', $image_name);
            $requestData['link'] = $image_name;
        }
        Resource::create($requestData);
        return redirect()->route('admin.resources.index')->with('success', 'Resources created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $resource =Resource::findOrFail($id);
        return view('admin.resources.show',compact('resource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $resource =Resource::findOrFail($id);
        return view('admin.resources.edit',compact('resource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "name_oz" => "required",
            "name_uz" => "required",
            "name_ru" => "required",
            "name_en" => "required",
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
            'info_oz' => "required",
            'info_uz' => "required",
            'info_ru' => "required",
            'info_en' => "required",
            'image' => "required",  
            'link' => "required",  
            'url' => "required",     
        ]);
        $resources =Resource::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('resources/images/'.$resources->image)){
                File::delete('resources/images/'.$resources->image);  
            } 
            $file = $request->file('image');
            $resources->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('resources/images/'),$resources->image);
            $request['image']=$resources->image;
        }
        if ($request->hasFile('link')) {
            $file = $request->file('link');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('resources/links/', $image_name);
            $requestData['link'] = $image_name;
        }
       
        $resources->update([
            "name_oz" =>$request->name_oz,
            "name_uz" =>$request->name_uz,
            "name_ru" =>$request->name_ru,
            "name_en" =>$request->name_en,
            "info_oz" =>$request->info_oz,
            "info_uz" =>$request->info_uz,
            "info_ru" =>$request->info_ru,
            "info_en" =>$request->info_en,
             "body_oz" =>$request->body_oz,
             "body_uz" =>$request->body_uz, 
             "body_ru" =>$request->body_ru, 
             "body_en" =>$request->body_en, 
             "link" =>$resources->link,
             "image" =>$resources->image,
         ]);
         return redirect()->route('admin.resources.index')->with('success','Resources updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resources = Resource::findOrFail($id);

        if(File::exists('resources/images/'.$resources->image)){
            File::delete('resources/images/'.$resources->image);  
        }
        if(File::exists('resources/links/'.$resources->link)){
            File::delete('resources/links/'.$resources->link);  
        }
        $resources->delete();
        return redirect()->route('admin.resources.index')->with('success','Resources deleted successfully!');
    }
}
