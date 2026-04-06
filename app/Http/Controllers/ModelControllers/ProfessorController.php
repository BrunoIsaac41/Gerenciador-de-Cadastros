<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Estudante;
use Illuminate\Http\Request;

class ProfessorController extends Controller
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
        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $professorData = [
            'user_id' => $request->user_id,
            'cpf' => $request->cpf,
        ];

        $professor_exists = Professor::whereIn('cpf', $professorData['cpf']);

        if($professor_exists){
            return redirect()->back()->with('status',
            [
                'type' => 'AlreadyCreated',
                'message' => 'CPF já cadastrado em nossa base de dados.'
            ]);
        }

        $estudanteValidated = $request->validated();
        
        if($estudanteValidated){
            $professor = new professor();
            $professor->user_id = $professorData['user_id'];
            $professor->cpf = $professorData['cpf'];
            $professor->save();
            return redirect()->route('login')->with('status', 
            ['type'=> 'sucessStore'
            ,'message' => 'Professor cadastrado com sucesso!'
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
        return view('professor.edit', ['id' => $id]);
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
