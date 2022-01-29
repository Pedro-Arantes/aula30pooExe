<?php

class AlunoTurma extends Aluno{

    public $turma;
    public $serieAno;
    

    function __construct($nome,$idade,$media,$turma,$serieAno){

        parent::__construct($nome,$idade,$media);

        $this->turma = $turma;
        $this->serAno = $serieAno;
        

    }

    function verAlunoTurma(){

        echo "Nome do Aluno: {$this->nome}<br>";
        echo "Idade do Aluno: {$this->idade}<br>";
        echo "Média do Aluno: {$this->media}<br>";
        echo "Turma do Aluno: {$this->turma}<br>";
        echo "Serie e Ano do Aluno: {$this->serAno}<hr>";
    }
}    