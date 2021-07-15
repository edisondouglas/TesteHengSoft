<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate(15);

        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adicionar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => 'O campo :attribute é requerido para o cadastro',
            'max' => 'Valor máximo de caracteres excedido',
            'telefone.size' => 'Certifique de digitar DDD e telefone, apenas números',
            'cep.size' => 'Certifique de digitar CEP completo, apenas números',
            'numeric' => 'Esse campo requer apenas números'
        ];

        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'size:11'],
            'cep' => ['required', 'size:8'],
            'endereco' => ['required', 'string', 'max:255'],
            'municipio' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string']
        ], $messages);

        if($cliente = Cliente::create($request->all())) {
            return redirect('/')->with('status', 'Cliente '.$cliente->nome.' salvo com sucesso');
        } else {
            return redirect('/adicionar')->with('error', 'Erro ao adicionar cliente');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        return view('editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        $messages = [
            'required' => 'O campo :attribute é requerido',
            'max' => 'Valor máximo de caracteres excedido',
            'telefone.size' => 'Certifique de digitar DDD e telefone, apenas números',
            'cep.size' => 'Certifique de digitar CEP completo, apenas números',
            'numeric' => 'Esse campo requer apenas números'
        ];

        $request->validate([
            'nome' => ['required', 'string', 'max:255'],
            'telefone' => ['required', 'size:11'],
            'cep' => ['required', 'size:8'],
            'endereco' => ['required', 'string', 'max:255'],
            'municipio' => ['required', 'string', 'max:255'],
            'estado' => ['required', 'string']
        ], $messages);

        if($cliente->update($request->all())){
            return redirect('/')->with('status', 'Cliente '.$cliente->nome.' editado com sucesso');
        } else {
            return redirect('/')->with('error', 'Erro ao editar cliente');
        }
    }

    public function destroy(Cliente $cliente)
    {
        if($cliente->delete()){
            return redirect('/')->with('status', 'Cliente '.$cliente->nome.' deletado com sucesso');
        } else {
            return redirect('/')->with('error', 'Erro ao deletar cliente');
        }
    }


}
