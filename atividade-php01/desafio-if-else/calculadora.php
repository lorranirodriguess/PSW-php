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

            if ($operacao === 'somar') {
                $resultado = $numero1 + $numero2;
                $simbolo = '+';
            } 
            elseif ($operacao === 'subtrair') {
                $resultado = $numero1 - $numero2;
                $simbolo = '-';
            } 
            elseif ($operacao === 'multiplicar') {
                $resultado = $numero1 * $numero2;
                $simbolo = "\u{00D7}";
            } 
            elseif ($operacao === 'dividir') {
                if ($numero2 == 0) {
                    echo '<p>Não é possível dividir por zero</p>';
                } 
                else {
                    $resultado = $numero1 / $numero2;
                    $simbolo = "\u{00F7}";
                }
            }
            elseif ($operacao === 'resto') {
                if ($numero2 == 0) {
                    echo '<p>Não é possível calcular resto com divisor zero</p>';
                } 
                else {
                    $resultado = $numero1 % $numero2;
                    $simbolo = '%';
                }
            }

            echo "<p>A operação realizada foi:</p>";
            echo "<p>{$numero1} {$simbolo} {$numero2} = <strong>{$resultado}</strong></p>";
       ?>
    </main>    

</body>
</html>