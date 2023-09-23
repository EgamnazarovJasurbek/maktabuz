<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
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
        ]);
        $requestData = $request->all();
        $requestData['slug'] = Str::slug($requestData['name_uz']);
        Category::create($requestData);
        return redirect()->route('admin.categories.index')->with('success', 'Category created succuessfuly'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit',compact('category'));
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
        ]);
        $categories = Category::findOrFail($id);
        $categories['slug'] = Str::slug($request->name_uz);
        $categories->update([
            "name_oz" =>$request->name_oz,
            "name_uz" =>$request->name_uz,
            "name_ru" =>$request->name_ru,
            "name_en" =>$request->name_en,
         ]);
         return redirect()->route('admin.categories.index')->with('success','Category updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('admin.categories.index')->with('success','Category deleted successfully!');
    }
}
