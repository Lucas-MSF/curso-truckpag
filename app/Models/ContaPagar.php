<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContaPagar extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'conta_pagar';
    protected $primaryKey = 'conta_pagar_id';
    protected $fillable = [
        'fornecedor_id',
        'descricao',
        'valor'
    ];
    protected  $casts = [
        'fornecedor_id' => 'integer',
        'valor' => 'decimal:2'
    ];
}
