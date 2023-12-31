<?php
//encapsulamento

//diz se um método é privado ou publico, visando a segunça para a aplicação

class Pai {

    //estes atributos possuem visibilidades diferentes e impactam na comunicação com o objeto criado
    private $nome = 'Emanuel';
    protected $sobrenome = 'Evangelista';

    //private e e protected são basicamente iguais porém há diferenças no processo de herança
    public $humor = 'Feliz';

    //é possível acessar atributos privados internamente
    /* 
    public function getNome() {
        return $this->nome;
    }
    
    public function setNome($value) {
        
        //atualiza apenas se o valor da string for maior q 5
        if(stren($value) >= 5) {
        return $this->nome = $value;
        }
    }
    */

    //definindo os metodos get e set podemos acessar os atributos do objetos diretamente, não funciona com métodos da classe
    public function __get($attr) {
        return $this->$attr;
    }

    public function __set($attr, $value) {
        $this->$attr = $value;
    }

    //para acessar metodos protegidos é necessario utilizar um outro metodo publico
    private function executarMania() {
        echo 'Assobiar';
    }

    protected function responder() {
        echo 'Olá';
    }

    public function executarAcao() {
        $x = rand(1, 10);

        //chama os metodos protegidos internamente conforme a lógica
        if ($x >= 1 && $x <= 5) {
            $this->executarMania();
        } else {
            $this->responder();
        }
    }
}

//herda tudo da classe pai que é public e protected, os que são private não são
class Filho extends Pai {
    
    public function getAtributo($attr) {
        return $this->$attr;
    }

    public function setAtributo($attr, $value) {
        $this->$attr = $value;
    }
}

/* $pai = new Pai();
echo $pai->executarAcao(); // não apresenta erro pois foram definidos os metodos get e set */

$filho = new Filho();
echo "<pre>";
print_r($filho);
echo "</pre>";
echo $filho->getAtributo('nome'); //aqui irá dar erro pois o nome é private, se os metodos get e set forem definidos no pai eles também herdarão e não haverá erros

$filho->setAtributo('nome', 'Silva'); //irá criar o atributo nome e atruir Silva
echo "<pre>";
print_r($filho);
echo "</pre>";
echo "<br />";
echo $filho->getAtributo('nome'); //não dará mais erro 
