<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 02</title>
</head>
<body>

 <?php 
    class Animal{
        public string $nome;

        public function __construct($nome){
            $this->nome = $nome;
        }

        public function fazerSom(){
            echo "O animal {$this->nome} faz som genérico";
        }

    }

    class Cachorro extends Animal{
        
        public function fazerSom1(){

            echo "O animal {$this->nome} faz au au";
        }

    }

    class Gato extends Animal{

        public function fazerSom2(){

            echo "O animal {$this->nome} faz miau miau";
        }

    }


    $exibir = new Animal("alfredo");
    echo $exibir -> fazerSom()."<br>";
    $exibir = new Cachorro("pluto");
    echo $exibir -> fazerSom1()."<br>";
    $exibir = new Gato("mia");
    echo $exibir -> fazerSom2();




?>   
</body>
</html>