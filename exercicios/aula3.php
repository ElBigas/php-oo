<?php

//métodos construtores e destrutor

//são métodos especiais de uma classe que são usados para inicialização e finalização de objetos.
//o método construtor é chamado automaticamente quando um objeto é criado a partir de uma classe, é usado para realizar ações de inicialização, configurar propriedades e executar qualquer lógica necessária antes que o objeto esteja pronto para ser usado

//destrutor é chamado automaticamente quando um objeto é destruído
//usado para realizar ações de finalização, liberar recursos ou executar qualquer lógica necessária antes que o objeto seja removido da memória

class Pessoa {
    public $nome = null;

    function __get($atributo) {
        return $this->$atributo;
    }

    function __construct($nome) {
        echo 'Objeto iniciado';
        $this->nome = $nome;
    }

    function __destruct() {
        echo '<br /> Objeto removido';
    }

    function correr() {
        return "<br />" . $this->nome . " está correndo";
    }
}

$pessoa = new Pessoa('Emanuel');
echo "<br />Nome: " . $pessoa->__get('nome');
echo $pessoa->correr();
unset($pessoa);
