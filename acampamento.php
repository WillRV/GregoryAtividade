<?php

    class acampamento{
        public $nome;
        public $equipe;
        public $idade;

        public function imprimir(){
            echo "Nome: " . $this->nome . "<br>";
            echo "Equipe: " . $this->equipe . "<br>";
            echo "Idade: " . $this->idade . "<br>";
        }
    }

    $participante = new acampamento;
    $participante->nome = "Roberto";
    $participante->idade = "0";

    if($participante->idade >=6 && $participante->idade <=10){
        $participante->equipe = "Equipe A";
    } else if($participante->idade >=11 && $participante->idade <=20){
        $participante->equipe = "Equipe B";
    } else if($participante->idade >20){
        $participante->equipe = "Equipe C";
    } else{
        $participante->equipe = "Não se encaixa aos padrões de equipe";
    }


    $participante-> imprimir();
?>