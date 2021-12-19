<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Aluno;


class AlunoController extends Controller
{
    public function alunos(){
        return Aluno::all();
    }
}
