<?php

//modelo
class Funcionario {
        //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;

    //setters (recebe um valor e manipula-o)
    function setNome($nome){
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    //getters (apenas retorna o atributo)
    function getNome(){
        return $this->nome;
    }

    function getNumFilhos(){
        return $this->numFilhos;
    }

    function getTelefone(){
        return $this->telefone;
    }

    //métodos
    function resumirCadFunc(){
        return "$this->nome possui $this->numFilhos filho(s) e seu telefone é $this->telefone";
    }

    function modificarNumFilhos($novoNumFilhos){
        $this->numFilhos = $novoNumFilhos;
    }
}

//cria um novo objeto funcionario
$x = new Funcionario();
$x->setNome('José');
$x->setNumFilhos(7);
$x->setTelefone('43 9 9999-9999');
echo $x->resumirCadFunc();

echo '<br />';

$y = new Funcionario();
$y->setNome('João');
$y->setNumFilhos(2);
$y->setTelefone('21 9 8888-8888');
echo $y->resumirCadFunc();