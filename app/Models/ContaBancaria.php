<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContaBancaria extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'conta_bancaria';
    protected $primaryKey = 'conta_bancaria_id';
    protected $fillable = [
        'banco_nome',
        'agencia_numero',
        'conta_numero',
        'saldo_inicial'
    ];
    protected  $casts = [
        'saldo_inicial' => 'decimal:2'
    ];
}
