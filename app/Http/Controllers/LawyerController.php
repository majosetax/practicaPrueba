<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawyers = Lawyer::all();
        return view('lawyer.index',compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lawyer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lawyer::factory()->create();

        return redirect()->route('lawyer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lawyer $lawyer)
    {
        return view('lawyer.show',compact('lawyer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lawyer $lawyer)
    {
        return view('lawyer.edit',compact('lawyer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lawyer $lawyer)
    {
        $lawyer->update($request->all());
        return redirect()->route('lawyer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lawyer $lawyer)
    {
        $lawyer->delete();
        return redirect()->route('lawyer.index');
    }
}
