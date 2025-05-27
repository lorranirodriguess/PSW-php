<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 01</title>
</head>
<body>
    <?php 
        require './Funcionario.php';
        require './Gerente.php';
        require './Programador.php';
    

        $exibir2 = new Gerente();
        $exibir3 = new Programador();
        echo $exibir2 -> exibirDados("Laila",1808.90)."<br>"; 
        echo $exibir2 -> incluir("comercial")."<br>";
        echo $exibir3 -> adicionar("Java");


    ?>
    
</body>
</html>