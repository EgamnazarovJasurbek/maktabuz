<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Director;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Director::all();
        return view('admin.directors.index',compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.directors.create',compact('categories'));
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
            "email" => "required",
            "category_id" => "required",
            "phone" => "required|numeric",
            "reception_time_oz" => "required",
            "reception_time_uz" => "required",
            "reception_time_ru" => "required",
            "reception_time_en" => "required",
             "biography_oz" => "required",
             "biography_uz" => "required", 
             "biography_ru" => "required", 
             "biography_en" => "required", 
             "image" => "required",  
        ]);

        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('directors/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Director::create($requestData);
        return redirect()->route('admin.directors.index')->with('success', 'Directors created succuessfuly'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $director = Director::findOrFail($id);
        return view('admin.directors.show',compact('director'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $director = Director::findOrFail($id);
        return view('admin.directors.edit',compact('director'));
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
            "email" => "required",
            "category_id" => "required",
            "phone" => "required|numeric",
            "reception_time_oz" => "required",
            "reception_time_uz" => "required",
            "reception_time_ru" => "required",
            "reception_time_en" => "required",
             "biography_oz" => "required",
             "biography_uz" => "required", 
             "biography_ru" => "required", 
             "biography_en" => "required", 
             "image" => "required",  
        ]);

        $directors = Director::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('directors/images/'.$directors->image)){
                File::delete('directors/images/'.$directors->image);  
            } 
            $file = $request->file('image');
            $directors->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('directors/images/'),$directors->image);
            $request['image']=$directors->image;
        }
        $directors->update([
            "name_oz" =>$request->name_oz,
            "name_uz" =>$request->name_uz,
            "name_ru" =>$request->name_ru,
            "name_en" =>$request->name_en,
            "email" =>$request->email,
            "category_id" =>$request->category_id,
            "phone" =>$request->phone,
            "reception_time_oz" =>$request->reception_time_oz,
            "reception_time_uz" =>$request->reception_time_uz,
            "reception_time_ru" =>$request->reception_time_ru,
            "reception_time_en" =>$request->reception_time_en,
             "biography_oz" =>$request->biography_oz,
             "biography_uz" =>$request->biography_uz, 
             "biography_ru" =>$request->biography_ru, 
             "biography_en" =>$request->biography_en, 
             "image" =>$directors->image,
         ]);
         return redirect()->route('admin.directors.index')->with('success','Directors updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $directors = Director::findOrFail($id);
        if(File::exists('directors/images/'.$directors->image)){
            File::delete('directors/images/'.$directors->image);  
        }
        $directors->delete();
        return redirect()->route('admin.directors.index')->with('success','Directors deleted successfully!');
    }
}
