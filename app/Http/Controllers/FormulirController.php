<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FormulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formulir = Formulir::all();
        return view('admin/pages/manageForms',['formulirs'=>$formulir]);
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Formulir $formulir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formulir $formulir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formulir $formulir)
    {
        $request->validate([
            'file' => ['mimes:pdf']
        ]);
        if ($request->hasFile('file')) {
            
            if ($formulir->file) {
                Storage::disk('public')->delete('formulir/' . $formulir->file);
            }
        
            $extension = $request->file('file')->getClientOriginalExtension();
        
            $fileName = $formulir->name . '.' . $extension;
        
            $path = $request->file('file')->storeAs('formulir', $fileName, 'public');
        
            $formulir->update([
                'file' => $fileName,
            ]);
        }
        return redirect()->back()->with('success', 'Form Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formulir $formulir)
    {
        //
    }
}
