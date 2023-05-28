<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chamado extends Model
{
    use HasFactory;

    protected $fillable = [
        'setor_id',
        'situacao_id',
        'titulo',
        'descricao',
        'prazo_termino',
    ];
    
    public function setor()
    {
        return $this->belongsTo(Setor::class,'setors_id');
    }

    public function situacao()
    {
        return $this->belongsTo(Situacao::class,'situacaos_id');
    }
}
