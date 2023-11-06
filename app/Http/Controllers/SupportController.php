<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
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


    
    
}
