<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Requisite;
use Illuminate\Http\Request;

class RequisitesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requisites = Requisite::all();
        return view('admin.requisites.index',compact('requisites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.requisites.create');
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
            'recipient_oz' => "required",  
            'recipient_uz' => "required",  
            'recipient_ru' => "required",  
            'recipient_en' => "required",  
            'bank_name_oz' => "required",  
            'bank_name_uz' => "required",  
            'bank_name_ru' => "required",  
            'bank_name_en' => "required",  
            'tin' => "required|numeric",  
            'checkpoint' => "required|numeric",  
            'bic' => "required|numeric",  
            'account' => "required|numeric",  
        ]);
        $requestData = $request->all();
        Requisite::create($requestData);
        return redirect()->route('admin.requisites.index')->with('success', 'Requisites created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $requisite = Requisite::findOrFail($id);
        return view('admin.requisites.show',compact('requisite'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $requisite = Requisite::findOrFail($id);
        return view('admin.requisites.edit',compact('requisite'));
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
            'recipient_oz' => "required",  
            'recipient_uz' => "required",  
            'recipient_ru' => "required",  
            'recipient_en' => "required",  
            'bank_name_oz' => "required",  
            'bank_name_uz' => "required",  
            'bank_name_ru' => "required",  
            'bank_name_en' => "required",  
            'tin' => "required|numeric",  
            'checkpoint' => "required|numeric",  
            'bic' => "required|numeric",  
            'account' => "required|numeric",  
        ]);
        $requisites = Requisite::findOrFail($id);
        $requisites->update([
           "title_oz" =>$request->title_oz,
           "title_uz" =>$request->title_uz,
           "title_ru" =>$request->title_ru,
           "title_en" =>$request->title_en,
           "recipient_oz" =>$request->recipient_oz,
           "recipient_uz" =>$request->recipient_uz,
           "recipient_ru" =>$request->recipient_ru,
           "recipient_en" =>$request->recipient_en,
           "bank_name_oz" =>$request->bank_name_oz,
           "bank_name_uz" =>$request->bank_name_uz,
           "bank_name_ru" =>$request->bank_name_ru,
           "bank_name_en" =>$request->bank_name_en,
           "tin" =>$request->tin,
           "checkpoint" =>$request->checkpoint,
           "bic" =>$request->bic,
           "account" =>$request->account,
         ]);
         return redirect()->route('admin.requisites.index')->with('success','Requisites updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $requisites = Requisite::findOrFail($id);
        $requisites->delete();
        return redirect()->route('admin.requisites.index')->with('success','Requisites deleted successfully!');
    }
}
