<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validateData = $request->validate([
            'tipe' => ['string'],
            'file' => ['mimes:pdf']
        ]);
        $originalFileName = $request->file('file')->getClientOriginalName();

        $path = $request->file('file')->storeAs('document', $originalFileName, 'public');

        Document::create([
            'user_id'=> auth()->guard('web')->user()->id,
            'file' => $path,
            'tipe' => $validateData['tipe'],    
        ]);
        return redirect()->back()->with('success', 'Formulir berhasil dikirim.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        //
    }
}
