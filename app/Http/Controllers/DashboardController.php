<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Estudante;
use App\Models\Turma;
use App\Models\Professor;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){

        return view('dashboard');

    }

    public function show(Request $request){
    
        $table = $request->table;
        // dd($table);

        try{
        
            if ($table ==='Estudante')
            {
                $tableData = Estudante::get();
            }
            if ($table ==="Turma")
            {
                $tableData = Turma::get();
            }
            if ($table === 'Professor')
            {
                $tableData = Professor::get();
            }

            if (isset($tableData)){
                return view('dashboard', ['data' => $tableData, 'table' => $table,
                    'statusQuery' => [
                        'type' => 'success',
                        'message' => 'Busca concluída com sucesso.'
                    ]
                ]);
            }
            else{
                return view('dashboard');
            };

        }
        catch(QueryException $e){
            Log::error(['error'=> $e->getMessage()]);
            return redirect()->back()
            ->with(session('statusQuery',
                [
                'type' => 'error',
                'message' => 'Erro ao consultar no banco de dados.'
                ]));
        }
    
   }

    public function create(Request $request) {
        $table = $request->input('table');
        
        switch($table){
            case "Estudante":
                return redirect()->route("estudante.create");
            
            case "Turma":
                return redirect()->route("turma.create");
        
        }
        
   }

    public function edit(Request $request){
       // $table = $request->$table;
        $id = $request->input('id');
        $table =$request->input('table');

        switch($table){
            case "Estudante":
                return redirect()->route("estudantes.edit", ['estudante' => $id]);
            
            case "Turma":
                return redirect()->route("turmas.edit");
        
        }

    }
   
}
