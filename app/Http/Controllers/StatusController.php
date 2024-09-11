<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status=Status::all();

        return view('dashboard.status.status_management',compact('status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.status.status_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $statu=new Status();
        $statu->name=$request->name;

        $statu->save();

        return redirect()->route('status.index');
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
        $statu=Status::find($id);

        return view('dashboard.status.status_edit',compact('statu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $statu=Status::find($id);

        $statu->name = $request->name;
    
        $statu->save();

        return redirect()->route('status.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $statu = Status::find($id);
        $statu->delete();
        return redirect()->route('status.index');
    }
}
