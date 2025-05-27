<?php

    class DVD extends Produto{
            public float $duracao;

            public function adicionarDuracao($duracao){
                $this->duracao=$duracao;

                return "A duração do DVD é de {$duracao} horas";
            }
            
        }

?>