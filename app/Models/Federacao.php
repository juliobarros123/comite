<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class Federacao extends Model
{
    
    
    use HasFactory;
    use SoftDeletes;
   
    protected $fillable = [
        'nome',
        'presidente',
        'selecao',
        'fundacao',
        'sede',
        'treinador',
        'logo_url',
        'email_contato',
        'telefone',
        'url_site',
        'confederacao',
        'descricao'
      
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $hash_bcrypt = '';
            $hash_bcrypt = Hash::make(slug_gerar());
            $stringSemBarras = str_replace('/', '', $hash_bcrypt);
            $model->slug = $stringSemBarras;
        });
    }
}
