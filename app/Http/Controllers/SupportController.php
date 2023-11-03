<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supports = Support::all();
        return view('site.tickets.index')->with('supports', $supports);
    }

    public function create()
    {
        return view('site.tickets.contact');
    }

    public function store(Request $request)
    {
        
        $supports = $request->only(['nome', 'email', 'telefone', 'duvida']);
        Support::create($supports);
        
        return redirect()->route('support.index');

    }
    
}
