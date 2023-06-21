<?php
//herança, também pode ser classe pai e filhos, genérica e especializadas e superclasse e subclasses

class Veiculo {
    public $placa = null;
    public $cor = null;

    function acelerar() {
        echo "Acelerar";
    }
}

class Carro extends Veiculo {

    function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTetoSolar() {
        echo 'Abrir teto solar';
    }
    
    function alterarPosicaoVolante() {
        echo 'Alterar posição volante';
    }
}

class Moto extends Veiculo {

    public $contraPesoGuidao = true;

    public function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar() {
        echo 'Empinar';
    }
}

$carro = new Carro('ABC1234', 'PRETO');
$carro = new Moto('CBA4321', 'BRANCO');
