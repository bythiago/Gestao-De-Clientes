<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model {
    // protected $table = "indices";
    protected $fillable = ['id', 'nome', 'data_nascimento', 'cep', 'rua', 'bairro', 'cidade', 'uf','email', 'telefone', 'celular', 'matricula', 'login', 'password'];
}
