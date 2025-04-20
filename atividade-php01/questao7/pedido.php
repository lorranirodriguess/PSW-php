<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questao 07</title>
</head>

<style>

    main{
        margin-top: 40px;
        color: #f6c342;
        box-shadow: 12px 10px 20px #651f036c ;
        border-radius: 30px;
    }

    input{
        background-color: beige;
        border: none;
        padding: 4px;
        margin-top: 4px;
        border-radius: 8px;
    }

    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    p{
        font-size: 20px;
    }

    h1{
        margin-bottom: 0;
    }

    img{
        width: 60px;
    }

    .resultado{
        text-align: center;
        color: #fff;
    }
</style>

<body>
    <main>
        <img src="imagens/logo.png" alt="logo">
        <?php 
            $precos = [
                "X-Burguer" => 18.00,
                "X-Salada" => 15.00,
                "X-Frango" => 17.00,
                "X-Calabresa" => 16.00,
                "X-Bacon" => 19.00,
                "X-Tudo" => 20.00
            ];

            $valor = $precos[$_POST['pedido']]
            ?>
            <div class="resultado">
                <p>
                    Você pediu um <?= $_POST['pedido'] ?? ''?> e o valor a ser pago é: R$<?=$valor ?? ''?>,00.<br>
                    <strong>Obrigada pela preferência!</strong>
                </p>
            </div>
    </main>
</body>
</html>