<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao04</title>
</head>
<body>
    
<?php 

    class Retangulo
    {
        public float $largura;
        public float $altura;

        public function __construct($altura, $largura)
        {
            $this-> largura = $largura;
            $this-> altura = $altura;
        }

        public function calcularArea(): float 
        {
            return $this->largura * $this->altura;
        }
        
        public function calcularPerimetro(): float 
        {
            return 2 * ($this->largura + $this->altura);
        }

    }

    $retangulo = new Retangulo(8.0, 6.0);
        
    echo "Área: " . $retangulo->calcularArea() .  "</br>";
    echo "Perímetro: " . $retangulo->calcularPerimetro() .  "</br>";
?>

</body>
</html>