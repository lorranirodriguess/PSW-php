<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 04</title>
</head>
<body>

    <main>
        <h1>Já pode ser preso?</h1>
        <?php 
            $idade = $_POST["idade"];

            if ($idade >= 18) {
                echo "<p>Você alcançou a maioridade.</p>";  
            }
            else{
                $falta_idade = 18 - $idade;
                echo "<p>Faltam $falta_idade anos para você alcançar a maioridade.</p>";
            }
        ?>
    </main>    

</body>
</html>