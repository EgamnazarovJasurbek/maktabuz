<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Twoshift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TwoshiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $twoshifts = Twoshift::paginate(5);
        return view('admin.twoshifts.index',compact('twoshifts'));
    }
       
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.twoshifts.create');
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
            $file->move('twoshifts/file/', $image_name);
            $requestData['image'] = $image_name;
        }
        Twoshift::create($requestData);
        return redirect()->route('admin.twoshifts.index')->with('success', 'Jadval created succuessfuly');
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
        $twoshift = Twoshift::findOrFail($id);
        return view('admin.twoshifts.edit',compact('twoshift'));
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
             "image" =>"required",
            ]);
            $twoshifts = Twoshift::findOrFail($id);
            if($request->hasFile('image')){
                if(File::exists('twoshifts/file/'.$twoshifts->image)){
                    File::delete('twoshifts/file/'.$twoshifts->image);  
                } 
                $file = $request->file('image');
                $twoshifts->image = time().'_'.$file->getClientOriginalName();
                $file->move(\public_path('twoshifts/file/'),$twoshifts->image);
                $request['image']=$twoshifts->image;
            }
            $twoshifts->update([
                "name_oz" =>$request->name_oz,
                "name_uz" =>$request->name_uz, 
                "name_ru" =>$request->name_ru, 
                "name_en" =>$request->name_en, 
                "image" =>$twoshifts->image,
            ]);
            return redirect()->route('admin.twoshifts.index')->with('success', 'Jadval update succuessfuly'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $twoshifts = Twoshift::findOrFail($id);
        if(File::exists('twoshifts/file/'.$twoshifts->image)){
            File::delete('twoshifts/file/'.$twoshifts->image);  
        }
        $twoshifts->delete();
        return redirect()->route('admin.twoshifts.index')->with('success','Jadval deleted successfully!');
    }
}
