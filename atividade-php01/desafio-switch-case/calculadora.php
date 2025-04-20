<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Desafio</title>
</head>

<style>
    main{
        text-align: center;
    }
</style>

<body>

    <main>
        <h1>Calculadora</h1>
        <?php 
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];

            $operacao = $_POST['operacao'];
       
            $resultado = null;

            switch ($operacao) {

                case 'somar':
                    $resultado = $numero1 + $numero2;
                    $simbolo = '+';
                    break;
                case 'subtrair':
                    $resultado = $numero1 - $numero2;
                    $simbolo = '-';
                    break;
                case 'multiplicar':
                    $resultado = $numero1 * $numero2;
                    $simbolo = "\u{00D7}";
                    break;
                case 'dividir':
                    if ($numero2 == 0) {
                        echo '<div class="result error">Não é possível dividir por zero</div>';
                    } else {
                        $resultado = $numero1 / $numero2;
                        $simbolo = "\u{00F7}";
                    }
                    break;
                case 'resto':
                    if ($numero2 == 0) {
                        echo '<div class="result error">Não é possível calcular resto com divisor zero</div>';
                    } else {
                        $resultado = $numero1 % $numero2;
                        $simbolo = '%';
                    }
                    break;
            }

            echo "<p>A operação realizada foi:</p>";
            echo "<p>{$numero1} {$simbolo} {$numero2} = <strong>{$resultado}</strong></p>";
       ?>
    </main>    

</body>
</html>