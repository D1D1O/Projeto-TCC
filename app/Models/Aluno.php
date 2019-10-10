<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $table = 'alunos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_user',
        'id_professor',
        'nome',
        'turma',
        'status',
    ];

    
}
