<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'setor',
    ];

    public function chamados()
    {
        return $this->hasMany(Chamado::class);
    }
}
