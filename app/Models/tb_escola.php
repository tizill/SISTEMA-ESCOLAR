<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_escola extends Model
{
    protected $fillable = ['nomeE', 'uf', 'cnpj'];
    protected $primaryKey = 'id_escola';
}
