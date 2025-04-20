<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 02</title>
</head>
<body>

    <main>
        <h1>Conversor de Temperatura</h1>
        <?php 
            $celcius = $_POST["tempC"];
    
            $fahrenheit = ($celcius * 1.8) + 32;
            echo "<p>A temperatura em  Fahrenheit é $fahrenheit</p>";
        ?>
    </main>    

</body>
</html>