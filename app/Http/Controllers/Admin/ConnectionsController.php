<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;

class ConnectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $connections = Connection::paginate(5);
        return view('admin.connections.index',compact('connections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.connections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name" => "required",
            "phone" => "required|numeric",
            "faks" => "required|numeric",
            "instagram" => "required",
            "telegram" => "required",
        ]);
        $requestData = $request->all();
        Connection::create($requestData);
        return redirect()->route('admin.connections.index')->with('success', 'Connections created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $connection = Connection::findOrFail($id);
        return view('admin.connections.show',compact('connection'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $connection = Connection::findOrFail($id);
        return view('admin.connections.edit',compact('connection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            "name" => "required",
            "phone" => "required|numeric",
            "faks" => "required|numeric",
            "instagram" => "required",
            "telegram" => "required",
        ]);
        $connection = Connection::findOrFail($id);
        $connection->update([
            "phone" =>$request->phone,
            "email" =>$request->email,
            "working" =>$request->working,
            "address" =>$request->address,
         ]);
        return redirect()->route('admin.connections.index')->with('success', 'Connections updated succuessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
