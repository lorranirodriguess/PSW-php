<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 06</title>
</head>
<body>

    <main>
        <h1>Temperatura</h1>
        <?php 
            $temperatura = $_POST["temperatura"];

            if ( $temperatura > 36.7) {
                echo "<p>Você está com febre.</p>";  
            }
            else if ($temperatura < 36){
                echo "<p>Você está abaixo da temperatura média ideal.</p>";
            }
            else{
                echo "<p>Você está dentro da temperatura média ideal.</p>";
            }
        ?>
    </main>    

</body>
</html>