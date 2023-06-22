<?php 
//polimorfismo 

//classe pai

use Veiculo as GlobalVeiculo;

class Veiculo {
    public $placa = null;
    public $cor = null;

    function acelerar() {
        echo "Acelerar";
    }

    function freiar() {
        echo "Freiar";
    }

    function trocarMarcha() {
        echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
    }
}

//classe carro vai extender de veiculo $placa e $cor e adicionar mais funções
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

//classe moto vai extender de veiculo $placa e $cor e adicionar mais funções
class Moto extends Veiculo {

    public $contraPesoGuidao = true;

    public function __construct($placa, $cor) {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar() {
        echo 'Empinar';
    }

    //foi subscrito a função pois a logica neste caso da moto deve ser diferente
    function trocarMarcha() {
        echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
    }
}

class Caminhao extends Veiculo {
    //apenas para teste
}

$carro = new Carro('ABC1234', 'PRETO');
$moto = new Moto('CBA4321', 'BRANCO');
$caminhao = new Caminhao();

$carro->trocarMarcha();
echo '<br />';
$moto->trocarMarcha();
echo '<br />';
$caminhao->trocarMarcha();
