<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SupportController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $supports = Support::where('user_id', $userId)->get();

        return view('site.tickets.index')->with('supports', $supports);
    }

    public function create()
    {
        return view('site.tickets.contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100|min:4',
            'email' => 'required',
            'telefone' => 'required|max:11|min:11', 
            'duvida' => 'required',
        ], [
            'nome.required' => 'O campo nome é obrigatório.',
            'nome.unique' => 'O nome já está em uso.',
            'nome.max' => 'O nome não pode ter mais de 100 caracteres.',
            'nome.min' => 'O nome deve ter pelo menos 4 caracteres.',
            'email.required' => 'O email é um campo obrigatório',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'telefone.max' => 'O telefone deve ter no máximo 11 caracteres.',
            'telefone.min' => 'O telefone deve ter no mínimo 11 caracteres.',
        ]);
        $userId = Auth::id();

        // Criar um array com os dados do contato e associar o ID do usuário
        $supportsData = $request->only(['nome', 'email', 'telefone', 'duvida']);
        $supportsData['user_id'] = $userId;

        $contentForHash = json_encode($supportsData);
        $supportsData['hash'] = hash('sha256', $contentForHash);

        // Criar o contato associado ao usuário
        Support::create($supportsData);
        
        return redirect()->route('support.index');

    }

    public function destroy($id)
    {

        $support = Support::find($id);

        if (!$support) {
            return redirect()->route('support.index')->with('error', 'Registro não encontrado.');
        }

        $support->delete();

        return redirect()->route('support.index')->with('success', 'Registro excluído com sucesso.');

    }

    public function edit($id)
    {
        $support = Support::find($id);

        if (!$support) {
            return redirect()->route('support.index')->with('error', 'Registro não encontrado.');
        }

        return view('site.tickets.edit', compact('support'));
    }

    public function update(Request $request, $id)
    {
        $support = Support::find($id);

        if (!$support) {
            return redirect()->route('support.index')->with('error', 'Registro não encontrado.');
        }

        $data = $request->only(['nome', 'email', 'telefone', 'duvida']);
        $support->update($data);

        return redirect()->route('support.index')->with('success', 'Registro atualizado com sucesso.');
    }


    public function createHash(Request $request)
    {
      

    }
    
    
}
