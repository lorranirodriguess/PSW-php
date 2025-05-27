<?php 

    
class Gerente extends Funcionario{
        public string $departamento;

        public function incluir($departamento){
            $this->departamento = $departamento;
            
            return "O Gerente pertence ao departamento {$departamento}";

        }
    }



?>