<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class SchoolNameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schoolName = SchoolName::all();
        return view('admin.schoolName.index', compact('schoolName'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.schoolName.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name_uz" => "required",
            "name_oz" => "required",
            "name_en" => "required",
            "name_ru" => "required",
            "city_uz" => "required",
            "city_oz" => "required",
            "city_en" => "required",
            "city_ru" => "required",
            "image" => "required",

        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('schoolName/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        SchoolName::create($requestData);
        return redirect()->route('admin.schoolName.index')->with('success', "Qo'shildi");
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
        $schoolName = SchoolName::findOrFail($id);
        return view('admin.schoolName.edit', compact('schoolName'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            "name_uz" => "required",
            "name_oz" => "required",
            "name_ru" => "required",
            "name_en" => "required",
            "city_uz" => "required",
            "city_en" => "required",
            "city_oz" => "required",
            "city_ru" => "required",
            'image' => 'required',

        ]);
        $schoolName = SchoolName::findOrFail($id);
      
        if($request->hasFile('image')){
            if(File::exists('schoolName/images/'.$schoolName->image)){
                File::delete('schoolName/images/'.$schoolName->image);  
            } 
            $file = $request->file('image');
            $schoolName->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('schoolName/images/'),$schoolName->image);
            $request['image']=$schoolName->image;
        }

        $schoolName->update([
            "name_uz" => $request->name_uz,
            "name_ru" => $request->name_ru,
            "name_en" => $request->name_en,
            "name_oz" => $request->name_oz,
            "city_uz" => $request->city_uz,
            "city_ru" => $request->city_ru,
            "city_en" => $request->city_en,
            "city_oz" => $request->city_oz,
            "image" => $schoolName->image,

        ]);
        return redirect()->route('admin.schoolName.index')->with('success', 'School name updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $schoolName = SchoolName::findOrFail($id);
        if (File::exists('schoolName/images/' . $schoolName->image)) {
            File::delete('schoolName/images/' . $schoolName->image);
        }
        $schoolName->delete();
        return redirect()->route('admin.schoolName.index')->with('success', 'School name deleted successfully!');
    }
}
