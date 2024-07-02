<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunos extends Model // aqui vamos passar os campos que podemos manipular no banco de dados 
{
    use HasFactory;
    protected $table = "aluno"; // coloquei essa linha, pois o Laravel estava adicionando um 'S' no final da tabela que tem no nome de aluno
    protected $fillable = ['nome_aluno', 'nro_registro', 'dat_inicio', 'dat_conclusao', 'dat_colacao_grau', 'dat_expedicao_diploma'];
}
