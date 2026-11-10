<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descrição',
        'marca',
        'categoria_id',
        'unidade_medida',
        'preco_custo',
        'preco_venda',
        'qtd_estoque',
        'estoque_min',
        'fornecedor_id'
    ];
    public function categoria(): BelongsTo
{
    return $this->belongsTo(Categoria::class);
}

}
