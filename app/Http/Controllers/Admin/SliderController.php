<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
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
            'number' => "required",  
        ]);
        $requestData = $request->all();
        Slider::create($requestData);
        return redirect()->route('admin.sliders.index')->with('success', 'Pupils Number created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.sliders.edit',compact('slider'));
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
            'number' => "required",  
        ]);
        $sliders = Slider::findOrFail($id);
        $sliders->update([
            "title_oz" =>$request->title_oz,
            "title_uz" =>$request->title_uz,
            "title_ru" =>$request->title_ru,
            "title_en" =>$request->title_en,
           "number" =>$request->number,
          ]);
          return redirect()->route('admin.sliders.index')->with('success', 'Pupils number updated succuessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sliders = Slider::findOrFail($id);
        $sliders->delete();
        return redirect()->route('admin.sliders.index')->with('success', 'Pupils number deleted succuessfuly');
    }
}
