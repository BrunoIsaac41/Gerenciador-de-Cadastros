<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estudante extends Model
{
    protected $fillable = [
        'user_id',
        'cpf',
        'matricula_id',
        'turma_id'
    ];
    protected $primaryKey = 'user_id';
    protected $table = 'estudantes';
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
        
    }

    public function turma()
    {
        return $this->belongsTo(Turma::class, 'turma_id');
    }
    
    public function matricula()
    {
        return $this -> hasOne(Matricula::class, 'matricula_id', 'numero_matricula');
    }
}
