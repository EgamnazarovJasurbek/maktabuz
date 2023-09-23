<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_1_oz' => "required", 
            'title_1_uz' => "required", 
            'title_1_ru' => "required", 
            'title_1_en' => "required", 
            'title_2_oz' => "required",
            'title_2_uz' => "required",
            'title_2_ru' => "required",
            'title_2_en' => "required",
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
            'image' => "required",  
              
        ]);
        $requestData = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('news/images/', $image_name);
            $requestData['image'] = $image_name;
        }
        News::create($requestData);
        return redirect()->route('admin.news.index')->with('success', 'News created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::findOrFail($id);
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'title_1_oz' => "required", 
            'title_1_uz' => "required", 
            'title_1_ru' => "required", 
            'title_1_en' => "required", 
            'title_2_oz' => "required",
            'title_2_uz' => "required",
            'title_2_ru' => "required",
            'title_2_en' => "required",
            'body_oz' => "required", 
            'body_uz' => "required",   
            'body_ru' => "required",  
            'body_en' => "required",  
            'image' => "required",  
              
        ]);
        $news = News::findOrFail($id);
        if($request->hasFile('image')){
            if(File::exists('news/images/'.$news->image)){
                File::delete('news/images/'.$news->image);  
            } 
            $file = $request->file('image');
            $news->image = time().'_'.$file->getClientOriginalName();
            $file->move(\public_path('news/images/'),$news->image);
            $request['image']=$news->image;
        }
        $news->update([
           "title_1_oz" =>$request->title_1_oz,
           "title_1_uz" =>$request->title_1_uz,
           "title_1_ru" =>$request->title_1_ru,
           "title_1_en" =>$request->title_1_en,
           "title_2_oz" =>$request->title_2_oz,
           "title_2_uz" =>$request->title_2_uz,
           "title_2_ru" =>$request->title_2_ru,
           "title_2_en" =>$request->title_2_en,
            "body_oz" =>$request->body_oz,
            "body_uz" =>$request->body_uz, 
            "body_ru" =>$request->body_ru, 
            "body_en" =>$request->body_en, 
            "image" =>$news->image,
        ]);
        return redirect()->route('admin.news.index')->with('success','News updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);

        if(File::exists('news/images/'.$news->image)){
            File::delete('news/images/'.$news->image);  
        }
        $news->delete();
        return redirect()->route('admin.news.index')->with('success','News deleted successfully!');
    }
}
