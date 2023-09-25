<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\One_shift;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class OneShiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $oneshifts = One_shift::paginate(5);
        return view('admin.oneshifts.index',compact('oneshifts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.oneshifts.create');
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
             "image" =>"required",
            ]); 
        $requestData = $request->all();
        
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('oneshifts/file/', $image_name);
            $requestData['image'] = $image_name;
        }
        One_shift::create($requestData);
        return redirect()->route('admin.oneshifts.index')->with('success', 'Jadval created succuessfuly');
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
        $oneshift = One_shift::findOrFail($id);
        return view('admin.oneshifts.edit',compact('oneshift'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oneshifts = One_shift::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('oneshifts/file/'.$oneshifts->image)){
                File::delete('oneshifts/file/'.$oneshifts->image);  
            } 
            $file = $request->file('image');
            $oneshifts->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('oneshifts/file/'),$oneshifts->image);
            $request['image']=$oneshifts->image;
        }
        $oneshifts->update([
            "name_oz" =>$request->name_oz,
            "name_uz" =>$request->name_uz, 
            "name_ru" =>$request->name_ru, 
            "name_en" =>$request->name_en, 
            "image" =>$oneshifts->image,
        ]);
        return redirect()->route('admin.oneshifts.index')->with('success', 'Jadval update succuessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $oneshifts = One_shift::findOrFail($id);

        if(File::exists('oneshifts/file/'.$oneshifts->image)){
            File::delete('oneshifts/file/'.$oneshifts->image);  
        }
        $oneshifts->delete();
        return redirect()->route('admin.oneshifts.index')->with('success','Jadval deleted successfully!');
    }
}
