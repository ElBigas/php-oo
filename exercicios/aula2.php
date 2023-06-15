<?php

//modelo
class Funcionario
{
    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //métodos getters e setters utilizando o overloanding / sobrecarga
    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    //métodos
    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filho(s), seu telefone é $this->telefone";
    }

    function modificarNumFilhos($novoNumFilhos)
    {
        $this->numFilhos = $novoNumFilhos;
    }
}

//cria um novo objeto funcionario
$x = new Funcionario();
$x->__set('nome', 'José');
$x->__set('numFilhos', 3);
$x->__set('telefone', '43 9 9999-9999');
$x->__set('cargo', 'Analista');
$x->__set('salario', '1500');
echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s), seu telefone é ' . $x->__get('telefone') . ' seu cargo é ' . $x->__get('cargo') . ' e seu salário é R$' . $x->__get('salario');

echo '<br />';
echo '<br />';

$y = new Funcionario();
$y->__set('nome', 'Maria');
$y->__set('numFilhos', 2);
$y->__set('telefone', '21 9 8888-8888');
$y->__set('cargo', 'RH');
$y->__set('salario', '2400');
echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s), seu telefone é ' . $y->__get('telefone') . ' seu cargo é ' . $y->__get('cargo') . ' e seu salário é R$' . $y->__get('salario');
