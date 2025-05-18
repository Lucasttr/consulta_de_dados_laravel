<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{   
    
    public function ind()
    {
        return view('welcome', );
    }
    

    
    public function create()
    {
        return view('cadastro');
    }

    // Salva o cliente no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'cpf' => 'required|unique:clientes,cpf',
            'email' => 'required|email|unique:clientes,email',
            'data_nascimento' => 'required|date',
            'telefone' => 'required',
            'genero' => 'required|in:Masculino,Feminino',
            'estado' => 'required|max:2',
            'endereco' => 'required',
        ]);

        Cliente::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'data_nascimento' => $request->data_nascimento,
            'telefone' => $request->telefone,
            'genero' => $request->genero,
            'estado' => $request->estado,
            'endereco' => $request->endereco,
        ]);

        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    
    
    public function index(Request $request)
    {
        $query = Cliente::query();

        // Filtros
        if ($request->filled('nome')) {
            $query->where('nome', $request->nome);
        }
        if ($request->filled('estado')) {
            $query->where('estado', $request->estado);
        }
        if ($request->filled('genero')) {
            $query->where('genero', $request->genero);
        }
        if ($request->filled('busca')) {
            $query->where('nome', 'like', '%' . $request->busca . '%');
        }

        $clientes = $query->orderBy('nome')->get();

        // Para os selects de filtro
        $nomes = Cliente::orderBy('nome')->pluck('nome')->unique();
        $estados = Cliente::orderBy('estado')->pluck('estado')->unique();
        $generos = ['Masculino', 'Feminino'];

        return view('clientes', compact('clientes', 'nomes', 'estados', 'generos'));
    }

    // Exibe detalhes dos cliente
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente', compact('cliente'));
    }
}