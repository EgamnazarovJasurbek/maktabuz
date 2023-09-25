<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqss = Faqs::paginate(5);
        return view('admin.faqs.index',compact('faqss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "title_oz" => "required",
            "title_uz" => "required",
            "title_ru" => "required",
            "title_en" => "required",
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
        ]);
        $requestData = $request->all();
        Faqs::create($requestData);
        return redirect()->route('admin.faqs.index')->with('success', 'Faqs created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $faqs = Faqs::findOrFail($id);
        return view('admin.faqs.show',compact('faqs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $faqs = Faqs::findOrFail($id);
        return view('admin.faqs.edit',compact('faqs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "title_oz" => "required",
            "title_uz" => "required",
            "title_ru" => "required",
            "title_en" => "required",
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
        ]);
        $faqs = Faqs::findOrFail($id);
        $faqs->update([
            "title_oz" =>$request->title_oz,
            "title_uz" =>$request->title_uz,
            "title_ru" =>$request->title_ru,
            "title_en" =>$request->title_en,
            "body_oz" =>$request->body_oz,
            "body_uz" =>$request->body_uz,
            "body_ru" =>$request->body_ru,
            "body_en" =>$request->body_en,
          ]);
          return redirect()->route('admin.faqs.index')->with('success', 'Faqs updated succuessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faqs = Faqs::findOrFail($id);
        $faqs->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'Faqs deleted succuessfuly');
    }
}
