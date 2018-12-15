<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
      $clientes = Cliente::all();

      return view('index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
      return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteRequest $request){

      //$clientes = new Cliente($request->all());
      $clientes = new Cliente();

      $clientes->nome = $request->get('nome');
      $clientes->data_nascimento = $request->get('data_nascimento');
      $clientes->cep = $request->get('cep');
      $clientes->rua = $request->get('rua');
      $clientes->bairro = $request->get('bairro');
      $clientes->cidade = $request->get('cidade');
      $clientes->uf = $request->get('uf');
      $clientes->email = $request->get('email');
      $clientes->telefone = $request->get('telefone');
      $clientes->celular = $request->get('celular');
      $clientes->matricula = $request->get('matricula');
      $clientes->login = $request->get('login');
      $clientes->password = Hash::make($request->get('password'));

      $clientes->save();
      return redirect()->route('clientes.index')
      ->with('success','Cliente cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
      $clientes = Cliente::find($id);
      return view('show', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
      $clientes = Cliente::find($id);
      return view('edit', compact('clientes', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteRequest $request, $id){

      $clientes = Cliente::find($id);

      $clientes->nome = $request->get('nome');
      $clientes->data_nascimento = $request->get('data_nascimento');
      $clientes->cep = $request->get('cep');
      $clientes->rua = $request->get('rua');
      $clientes->bairro = $request->get('bairro');
      $clientes->cidade = $request->get('cidade');
      $clientes->uf = $request->get('uf');
      $clientes->email = $request->get('email');
      $clientes->telefone = $request->get('telefone');
      $clientes->celular = $request->get('celular');
      $clientes->matricula = $request->get('matricula');
      $clientes->login = $request->get('login');
      $clientes->password = Hash::make($request->get('password'));
      
      $clientes->update();
      //$clientes->update($request->all());

      return redirect()->route('clientes.index')
      ->with('success','Cliente atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
      $clientes = Cliente::find($id);
      $clientes->delete();
      return redirect()->route('clientes.index')->with('success','Cliente deletado com sucesso.');
    }
}
