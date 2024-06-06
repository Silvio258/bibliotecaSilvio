<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Degrees;

class DegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $degrees=Degrees::all();
        return view('degrees.index',compact('degrees'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('degrees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $degree= new Degrees();
        $degree->code=$request->code;
        $degree->name=$request->name;
        $degree->description=$request->description;
        $degree->save();
        return redirect()->route('degrees.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $degree=Degrees::find($id);
        return view('degrees.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $degree=Degrees::find($id);
        return view('degrees.edit',compact('degree'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $degree=Degrees::find($id);
        $degree->code=$request->code;
        $degree->name=$request->name;
        $degree->description=$request->description;
        $degree->save();
        return redirect()->route('degrees.index');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $degree=Degrees::find($id);
        $degree->delete();
        return redirect()->route('degrees.index');
    }
}
