<?php

class AlunoPagamento extends Aluno{

    public $valor;
    public $foiPago;
    

    function __construct($nome,$idade,$media,$valor,$foiPago){

        parent::__construct($nome,$idade,$media);

        $this->val = $valor;
        $this->pago = $foiPago;
        

    }

    function verAlunoPagamento(){

        echo "Nome do Aluno: {$this->nome}<br>";
        echo "Idade do Aluno: {$this->idade}<br>";
        echo "Média do Aluno: {$this->media}<br>";
        echo "Valor da Mensalidade: {$this->val}<br>";
        echo "Realizou o Pagamento: {$this->pago}<hr>";
    }
}    