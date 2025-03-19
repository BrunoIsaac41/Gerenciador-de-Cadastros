<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'numero_matricula'; 
    protected $table = 'matriculas';

    protected $fillable = [
        'numero_matricula',
        'estudante_id',
        'carencia_meses',
        'status',
        'data_matricula'
    ];

    public function student()
    {
        return $this->belongsTo(Estudante::class, 'estudante_id','id'); 
    }
}
