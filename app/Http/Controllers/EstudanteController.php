<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estudante;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $estudanteData = [
            'user_id' => $request->user_id,
            'cpf' => $request->cpf,
            'matricula_id' => $request->matricula_id,
            'turma_id' => $request->turma_id
        ];

        $estudante_exists = Estudante::whereIn('cpf', $estudanteData['cpf']);

        if($estudante_exists){
            return redirect()->back()->with('status',
            [
                'type' => 'AlreadyCreated',
                'message' => 'CPF já cadastrado em nossa base de dados.'
            ]);
        }

        $estudanteValidated = $request->validated();
        
        if($estudanteValidated){
            $estudante = new Estudante();
            $estudante->user_id = $estudanteData['user_id'];
            $estudante->cpf = $estudanteData['cpf'];
            $estudante->matricula_id = $estudanteData['matricula_id'];
            $estudante->turma_id = $estudanteData['turma_id'];
            $estudante->save();
            return redirect()->route('login')->with('status', 
            ['type'=> 'sucessStore'
            ,'message' => 'Estudante criado com sucesso!'
            ]);
        }
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
