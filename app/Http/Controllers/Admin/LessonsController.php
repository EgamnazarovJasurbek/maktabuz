<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = Lesson::all();
        return view('admin.lessons.index',compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name_oz" =>"required",
            "name_uz" =>"required",
            "name_ru" =>"required",
            "name_en" =>"required",
            "teacher_oz" =>"required",
            "teacher_uz" =>"required",
            "teacher_ru" =>"required",
            "teacher_en" =>"required",
            "phone" =>"required|numeric",
            "time" =>"required",
            "week_oz" =>"required",
            "week_uz" =>"required",
            "week_ru" =>"required",
            "week_en" =>"required",
             "class_oz" =>"required",
             "class_ru" =>"required",
             "class_uz" =>"required",
             "class_en" =>"required",
             "image" =>"required",
            ]); 
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('lessons/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        Lesson::create($requestData);
        return redirect()->route('admin.lessons.index')->with('success', 'Lesson created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('admin.lessons.show',compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $lesson = Lesson::findOrFail($id);
        return view('admin.lessons.edit',compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
        "name_oz" =>"required",
        "name_uz" =>"required",
        "name_ru" =>"required",
        "name_en" =>"required",
        "teacher_oz" =>"required",
        "teacher_uz" =>"required",
        "teacher_ru" =>"required",
        "teacher_en" =>"required",
        "phone" =>"required|numeric",
        "time" =>"required",
        "week_oz" =>"required",
        "week_uz" =>"required",
        "week_ru" =>"required",
        "week_en" =>"required",
         "class_oz" =>"required",
         "class_ru" =>"required",
         "class_uz" =>"required",
         "image" =>"required",
         "class_en" =>"required",
        ]); 
        $lessons = Lesson::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('lessons/images/'.$lessons->image)){
                File::delete('lessons/images/'.$lessons->image);  
            } 
            $file = $request->file('image');
            $lessons->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('lessons/images/'),$lessons->image);
            $request['image']=$lessons->image;
        }
        $lessons->update([
            "name_oz" =>$request->name_oz,
            "name_uz" =>$request->name_uz,
            "name_ru" =>$request->name_ru,
            "name_en" =>$request->name_en,
            "teacher_oz" =>$request->teacher_oz,
            "teacher_uz" =>$request->teacher_uz,
            "teacher_ru" =>$request->teacher_ru,
            "teacher_en" =>$request->teacher_en,
            "phone" =>$request->phone,
            "time" =>$request->time,
            "week_oz" =>$request->week_oz,
            "week_uz" =>$request->week_uz,
            "week_ru" =>$request->week_ru,
            "week_en" =>$request->week_en,
             "class_oz" =>$request->class_oz,
             "class_ru" =>$request->class_ru, 
             "class_uz" =>$request->class_uz, 
             "image" =>$lessons->image,
             "class_en" =>$request->class_en, 
         ]);
         return redirect()->route('admin.lessons.index')->with('success','Lesson updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lessons = Lesson::findOrFail($id);
        if(File::exists('lessons/images/'.$lessons->image)){
            File::delete('lessons/images/'.$lessons->image);  
        }
        $lessons->delete();
        return redirect()->route('admin.lessons.index')->with('success','Lessons deleted successfully!');
    }
}
