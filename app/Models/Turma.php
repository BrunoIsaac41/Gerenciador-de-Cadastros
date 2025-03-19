<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'qtd_alunos',
    ];
    public $timestamps = false;
    
    public function estudante()
    {
        return $this->hasMany(Estudante::class, 'turma_id');
    }
}
