<?php 

    class Programador extends Funcionario{
        public string $linguagem;

        public function adicionar($linguagem){
            $this->linguagem = $linguagem;

            return "O programador trabalha com a linguagem {$linguagem}";
        }


    }
?>