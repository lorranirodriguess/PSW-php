<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão01</title>
</head>
<body>

<?php 

    class Pessoa
    {
        public string $nome;
        public int $idade; 


        public function apresentar ($nome, $idade)
        {
            //$this: indica que estou utilizando o atributo acima (don public)
            $this-> nome = $nome;
            $this-> idade = $idade;
            //Nesse momento podemos cadastrar no BD

            return $this->nome.'</strong> tem '. $this->idade.' anos <br>';
        }
    }
    
    $pessoa = new Pessoa(); //o new cria um novo objeto a partir da classe usuario(instanciando a classe criando um objeto)
    $msg = $pessoa->apresentar("Ana Beatriz",17); //a variavel usuario é o novo objeto, a setinha está chamando o q eu quero da classe, ou seja o metodo
    echo $msg;    
?>
    
</body>
</html>
