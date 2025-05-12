<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão02</title>
</head>
<body>
 
<?php 

    class Triangulo
    {
        public $lado1;
        public $lado2;
        public $lado3;

        function __construct($lado1, $lado2, $lado3)
        {
            $this->lado1 = $lado1;
            $this->lado2 = $lado2;
            $this->lado3 = $lado3;
        }

        function validar()
        {

            if ($this->lado1 <= 0 and $this->lado2 <=0 and $this->lado3 <= 0){
                return false;
            }

            if ((($this->lado1 + $this->lado2) > $this->lado3)  and 
                (($this->lado2 + $this->lado3) > $this->lado1) and
                (($this->lado1 + $this->lado3) > $this->lado2)){

                    return "É um triângulo válido";
            }
        }

        function area()
        {
            // Usando a formula de heron de semi-perimetro
            $perimetro = ($this->lado1 + $this->lado2 + $this->lado3) / 2;

            $area = sqrt($perimetro * ($perimetro-$this->lado1)* ($perimetro-$this->lado2)* ($perimetro-$this->lado3));

            return "A área é: " .  $area;
        }
    }


    $triangulo = new Triangulo(3, 4 ,5);

    echo $triangulo->validar();
    echo "</br>";
    echo $triangulo->area();

?>

</body>
</html>