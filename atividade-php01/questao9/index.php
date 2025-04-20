<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 09</title>
</head>
<body>

    <main>
        <h1>Números pares de 1 a 100.</h1>
        <?php  
            $i = 1;
            
            while ($i < 101) {
                if($i % 2 == 0){
                    echo " $i ";
                }
                $i++;
            } 
        ?>  
    </main>    

</body>
</html>