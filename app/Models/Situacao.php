<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
use HasFactory;

protected $fillable = [
    'descricao',
    'primario'
];

public function chamados()
{
    return $this->hasMany(Chamado::class);
}
}