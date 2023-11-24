<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('site.login.index');
    }

   
    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
      if(!Auth::attempt($request->only(['email','password']))) {
        return redirect()->back()->withErrors('Usuário ou senha inválidos!');
      }

      return to_route('support.index');
    }

 
    public function show(string $id)
    {
        
    }

  
    public function edit(string $id)
    {
        
    }

  
    public function update(Request $request, string $id)
    {
        
    }

   

    public function destroy()
    {
       Auth::logout();
       return to_route('login.index');
    }
}
