<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
  
    public function index()
    {
      
    }


    public function create()
    {
      return view('site.login.create');

      
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100|min:4',
            'email' => 'required',
            'password'=>'required|min:8',
        ],[
            'name.required'=>"O campo nome é obrigatório",
            'name.max'=>"O campo nome deve ter no maximo 100 caracteres",
            'name.min'=>"O campo nome deve ter no minimo 4 caracteres",
            'email.required'=>"O campo email é obrigatório",
            'password.required'=>"O campo senha é obrigatório",
            'password.min'=>"O campo senha deve ter no minimo 8 caracteres",
        ]);
        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);
        
        $user = User::create($data);
        Auth::login($user);

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

   
    public function destroy(string $id)
    {
        
    }
}
