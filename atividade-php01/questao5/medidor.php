<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 05</title>
</head>
<body>

    <main>
        <h1>Medidor de velocidade</h1>
        <?php 
            $velocidade = $_POST["velocidade"];

            if ($velocidade > 110) {
                echo "<p>Você ultrapassou o limite de velocidade permitida.</p>";  
            }
            else if ($velocidade == 110){
                echo "<p>Você está no limite da velocidade permitida.</p>";
            }
            else{
                echo "<p>Você está abaixo do limite da velocidade permitida.</p>";
            }
        ?>
    </main>    

</body>
</html>