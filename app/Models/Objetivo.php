<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objetivo extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'objetivo',
        'descricao',
        'concluido',
        'arquivado',
        'prioridade',
        'parent_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
