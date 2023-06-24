<?php

//os metodos desta interface serão definidos no objeto, caso contrario apresentará erro na classe
interface EquipamentosEletroInterface {

    public function ligar();
    public function desligar();
}

class Geladeira implements EquipamentosEletroInterface {

    public function abrirPorta() {
        echo 'Abrir';
    }

    public function ligar() {
        echo 'Ligar';
    }

    public function desligar() {
        echo 'Desligar';
    }
}

class TV implements EquipamentosEletroInterface {

    public function trocarCanal() {
        echo 'Trocar canal';
    }

    public function ligar() {
        echo 'Ligar';
    }

    public function desligar() {
        echo 'Desligar';
    }
}

//----------------------------------------------------

//mais de uma interface
interface MamiferoInterface {
    public function respirar();
}

interface TerrestreInterface {
    public function andar();
}

interface AquiticoInterface {
    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface {

    public function respirar() {
        echo 'Respirar';
    }

    public function andar() {
        echo 'Andar';
    }

    public function conversar() {
        echo 'conversar';
    }
}

class Baleia implements MamiferoInterface, AquiticoInterface {

    public function respirar() {
        echo 'Respirar';
    }

    public function nadar() {
        echo 'Nadar';
    }

    public function esquichar() {
        echo 'esquichar';
    }
}

//-----------------------------------------------------

//interfaces também podem extender de outras
interface AnimalInterface {
    public function comer();
}

interface AveInterface extends AnimalInterface {
    public function voar();
}

class Papagio implements AveInterface {

    public function comer() {
        echo 'comer';
    }

    public function voar() {
        echo 'voar';
    }
}
