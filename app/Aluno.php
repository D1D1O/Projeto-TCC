<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    

    protected $fillable = [
       'id_user','id_professor', 'nome', 'turma','status',
    ];
}
