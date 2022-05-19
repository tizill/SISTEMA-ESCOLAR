<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_turma extends Model
{
    protected $fillable = ['nomeT', 'status', 'escola'];
    protected $primaryKey = 'id_turma';
}
