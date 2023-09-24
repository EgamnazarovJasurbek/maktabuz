<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Teacher;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.teachers.create',compact('categories'));
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
            "specialist_oz" => "required",
            "specialist_uz" => "required",
            "specialist_ru" => "required",
            "specialist_en" => "required",
            "class_time_oz" => "required",
            "class_time_uz" => "required", 
            "class_time_ru" => "required", 
            "class_time_en" => "required", 
             "image" => "required",  
        ]);

        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('teachers/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Teacher::create($requestData);
        return redirect()->route('admin.teachers.index')->with('success', 'Teachers created succuessfuly'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.show',compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.edit',compact('teacher'));
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
            "specialist_oz" => "required",
            "specialist_uz" => "required",
            "specialist_ru" => "required",
            "specialist_en" => "required",
            "class_time_oz" => "required",
            "class_time_uz" => "required", 
            "class_time_ru" => "required", 
            "class_time_en" => "required", 
             "image" => "required",  
        ]);
        $teachers = Teacher::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('teachers/images/'.$teachers->image)){
                File::delete('teachers/images/'.$teachers->image);  
            } 
            $file = $request->file('image');
            $teachers->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('teachers/images/'),$teachers->image);
            $request['image']=$teachers->image;
        }
        $teachers->update([
            "name_oz" =>$request->name_oz,
            "name_uz" =>$request->name_uz,
            "name_ru" =>$request->name_ru,
            "name_en" =>$request->name_en,
            "email" =>$request->email,
            "phone" =>$request->phone,
            "specialist_oz" =>$request->specialist_oz,
            "specialist_uz" =>$request->specialist_uz,
            "specialist_ru" =>$request->specialist_ru,
            "specialist_en" =>$request->specialist_en,
             "class_time_oz" =>$request->class_time_oz,
             "class_time_uz" =>$request->class_time_uz, 
             "class_time_ru" =>$request->class_time_ru, 
             "class_time_en" =>$request->class_time_en, 
             "image" =>$teachers->image,
         ]);
         return redirect()->route('admin.teachers.index')->with('success','Teachers updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teachers = Teacher::findOrFail($id);
        if(File::exists('teachers/images/'.$teachers->image)){
            File::delete('teachers/images/'.$teachers->image);  
        }
        $teachers->delete();
        return redirect()->route('admin.teachers.index')->with('success','Teacher deleted successfully!');
    }
}
