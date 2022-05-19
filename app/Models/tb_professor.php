<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_professor extends Model
{
    protected $fillable = ['nomeP', 'cpf', 'turma'];
    protected $primaryKey = 'id_professor';
}
