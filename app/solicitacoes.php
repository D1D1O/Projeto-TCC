<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class solicitacoes extends Model
{
    protected $table = 'solicitacao';
    
    protected $fillable = [
        'id_aluno', 'id_prof', 'sttsSolic','respProf',
     ];
}
