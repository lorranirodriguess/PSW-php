<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão03</title>
</head>
<body>

<?php 

    class Carro
    {
        public string $marca;
        public string $modelo;
        public float $velocidade;  
        
        public function __construct($marca, $modelo, $velocidade)
        {
            $this-> marca = $marca;
            $this-> modelo = $modelo;
            $this-> velocidade = $velocidade;
        }

        public function acelerar()
        {
            echo "O CARRO ESTÁ ACELERANDO";
        }

        public function frear()
        {
            echo "O CARRO ESTÁ FREANDO";
        }

        public function exibir_velocidade()
        {
            echo "A VELOCIDADE ATUAL DO CARRO É " . $this->velocidade . " Km/h";
        }
    }

    $carro = new Carro("Toyota", "Hillux", 120 );
    $carro->acelerar();
    echo "</br>";
    $carro->frear();
    echo "</br>";
    $carro->exibir_velocidade();

?>
    
</body>
</html>