<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    //caso o laravel nao consiga pluralizar e localizar a tabela
    //coloque aqui o nome da tabela
    protected $table = 'produtos';
}
