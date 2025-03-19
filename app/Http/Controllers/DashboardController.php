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

   public function showTable(Request $request){
    
    $table = $request->table;
    // dd($table);

    try{
       
        if ($table ==='Estudante')
        {
            $data = Estudante::get();
        }
        if ($table ==="Turma")
        {
            $data = Turma::get();
        }
        if ($table === 'Professor')
        {
            $data = Professor::get();
        }

        return view('dashboard')->with([
            'statusQuery' => [
                'type' => 'success',
                'message' => 'Busca concluída com sucesso.'
            ], 'data'=> $data]);
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
}
