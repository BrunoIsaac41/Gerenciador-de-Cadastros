<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'id',
        'descricao'
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'categoria	id');
    }
}
