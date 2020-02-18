<?php

    $nome = $_GET["nome"];
    $idade = $_GET["idade"];

    class acampamento{
        private $nome;
        private $equipe;
        private $idade;

        public function imprimir(){
            echo "Nome: " . $this->nome . "<br>";
            echo "Equipe: " . $this->equipe . "<br>";
            echo "Idade: " . $this->idade . "<br>";
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEquipe(){
            return $this->equipe;
        }

        public function getIdade(){
            return $this->idade;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setEquipe($equipe){
            $this->equipe = $equipe;
        }

        public function setIdade($idade){
            $this->idade = $idade;
        }
    }

    $participante = new acampamento;
    $participante->setNome($nome);
    $participante->setIdade("$idade");

    if($participante->getIdade() >=6 && $participante->getIdade() <=10){
        $participante->setEquipe("Equipe A");
    } else if($participante->getIdade() >=11 && $participante->getIdade() <=20){
        $participante->setEquipe("Equipe B");
    } else if($participante->getIdade() >21){
        $participante->setEquipe("Equipe C");
    } else{
        $participante->setEquipe("Não se encaixa aos padrões de equipe");
    }    

    
    
    $participante-> imprimir();
?>