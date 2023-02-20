<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    use HasFactory;
    
    protected $table = 'fornecedor';
    protected $primaryKey = 'fornecedor_id';
    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'endereco'
    ];



}