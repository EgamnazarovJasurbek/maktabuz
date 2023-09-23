<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('admin.tasks.index',compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "body_oz" => "required",
            "body_uz" => "required",
            "body_ru" => "required",
            "body_en" => "required",
        ]);
        $requestData = $request->all();
      
        Task::create($requestData);
        return redirect()->route('admin.tasks.index')->with('success', 'Taaks created succuessfuly'); 
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);
        return view('admin.tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);
        return view('admin.tasks.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "body_oz" => "required",
            "body_uz" => "required",
            "body_ru" => "required",
            "body_en" => "required",
        ]);
        $tasks = Task::findOrFail($id);
        $tasks->update([
            "body_oz" =>$request->body_oz,
            "body_uz" =>$request->body_uz,
            "body_ru" =>$request->body_ru,
            "body_en" =>$request->body_en,
         ]);
         return redirect()->route('admin.tasks.index')->with('success','Tasks updated successfully!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tasks = Task::findOrFail($id);
        $tasks->delete();
        return redirect()->route('admin.tasks.index')->with('success','Tasks deleted successfully!');
    }
}
