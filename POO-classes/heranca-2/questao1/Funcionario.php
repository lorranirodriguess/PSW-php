<?php

Class Funcionario{
    public string $nome;
    public float $salario;


    public function exibirDados($nome, $salario){

        $this->nome = $nome;
        $this->salario = $salario;

        return "O funcionário {$nome} recebe {$salario} reais";
    }

}

?>