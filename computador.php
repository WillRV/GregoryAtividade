<?php
    $marca = $_GET["marca"];
    $cor = $_GET["cor"];  
    $modelo = $_GET["modelo"];
    $numSerie =  $_GET["numSerie"];
    $preco = $_GET["preco"];

        class computador{
            private $marca;
            private $cor;
            private $modelo;
            private $numSerie;
            private $preco;


            public function getMarca(){
                return $this->marca;
            }
            public function getCor(){
                return $this->cor;
            }
            public function getModelo(){
                return $this->modelo;
            }
            public function getNumSerie(){
                return $this->numSerie;
            }
            public function getPreco(){
                return $this->preco;
            }
            
            public function setMarca($marca){
                $this->marca = $marca;
            }
            public function setCor($cor){
                $this->cor = $cor;
            }
            public function setModelo($modelo){
                $this->modelo = $modelo;
            }
            public function setNumSerie($numSerie){
                $this->numSerie = $numSerie;
            }
            public function setPreco($precoApos){
                // echo("Preço após: " . $precoApos);
                if($precoApos >= 0){
                    $this->preco = $precoApos;
                    }
                else{
                    echo "Valor Do preço Inválido <br> <br>" ;
                }
            }
            public function imprimir(){
                echo "Marca: " . $this->marca . "<br>";
                echo "Cor: " . $this->cor . "<br>";
                echo "Modelo: " . $this->modelo . "<br>";
                echo "Numero de Serie: " . $this->numSerie . "<br>";
                echo "Preço: " . $this->preco . "<br>";
            }
        }

        $pc = new computador;
        $pc->setMarca($marca);
        $pc->setCor($cor);
        $pc->setModelo($modelo);
        $pc->setNumSerie($numSerie);
        $pc->setPreco($preco);
        
        if($pc ->getMarca() == 'HP'){
            $precoComAcrescimo = $pc->getPreco() + ($pc->getPreco() * 30 / 100);  
            $pc->setPreco($precoComAcrescimo);  
        }
        else if($pc ->getMarca() == 'IBM'){
            $precoComAcrescimo = $pc->getPreco() + ($pc->getPreco() * 50 / 100);  
            $pc->setPreco($precoComAcrescimo);
        }
    $pc ->imprimir();
?>