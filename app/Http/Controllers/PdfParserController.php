<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfParserController extends Controller
{
  
    public function index(Request $request)
    {
         $pdfPath = public_path('hello.pdf');

         $parser = new \Smalot\PdfParser\Parser();
         $pdf = $parser->parseFile($pdfPath);
 
         $text = $pdf->getText();
         
         if ($request->wantsJson()) {
             return response()->json(['text' => $text]);
         }
 
         // If not JSON, you can render a view with the extracted text
         return view('site.Pdf.pdf_parser', ['text' => $text]);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
