<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio</title>
</head>
<body>
    <?php 
        class ContaBancaria
        {
            public string $titular;
            public float $saldo;

            public function cadastrar($nome, $valor) {
                $this -> titular = $nome;
                $this -> saldo = $valor;
            }

            public function depositar($valor)
            {
                if ($valor > 0) {
                    $this -> saldo = $this->saldo + $valor;

                    return "O usuário depositou {$valor} <br>
                    O usuário tem " . $this->saldo; 
                }
                else {
                    return "Valor inserido inválido";
                }
            }

            public function sacar($valor)
            {
                if ($this -> saldo >= $valor) {
                    $saldoanterior = $this -> saldo;
                    $this -> saldo = $this -> saldo - $valor;
                    return "Saldo anterior: {$saldoanterior} <br>
                    Valor do saque: {$valor} <br>
                    Saldo atual: {$this->saldo}";
                } else {
                    return "O valor do saque excede o saldo atual.";
                }
            }
        }

        $conta = new ContaBancaria();
        $conta -> cadastrar('Lorrani', 0);
        echo $conta -> depositar(500);
        echo "<br>";
        echo $conta -> sacar(400);
    ?>
</body>
</html>