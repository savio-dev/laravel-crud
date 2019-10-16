<?php

namespace App\Http\Controllers;

use App\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$projetos = Projeto::all();
return view('projeto_index',['projetos' => $projetos]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastro_projeto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $projeto = new Projeto;

        $projeto->nome = $request->nome;
        $projeto->lider = $request->lider;
        $projeto->ano= $request->ano;
      //return $projeto; 
      $projeto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
  $projeto = Projeto::find($id);
  echo $projeto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  $projeto = Projeto::find($id);
  return view('editar_projeto', $projeto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     $projeto = Projeto::find($id);
     $projeto->nome = $request->nome;
     $projeto->lider= $request->lider;
     $projeto->ano = $request->ano;
     $projeto->save();  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $projeto = Projeto::find($id);
		  $projeto->delete();
    }
}
