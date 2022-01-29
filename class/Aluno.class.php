<?php

class Aluno{

    public $nome;
    public $idade;
    public $media;

    function __construct($nome,$idade,$media){

        $this->nome = $nome;
        $this->idade = $idade;
        $this->media = $media;

    }

    function verAluno(){

        echo "Nome do Aluno: {$this->nome}<br>";
        echo "Idade do Aluno: {$this->idade}<br>";
        echo "Média do Aluno: {$this->media}<hr>";
    }
    
}
