<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao06</title>
</head>
<body>
    
<?php 
    class Produto
    {
        public string $nome;
        public float $preco;
        public int $quantidade;
    
        public function __construct($nome, $preco, $quantidade)
        {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->quantidade = $quantidade;
        }
    
        public function calcularValorTotal(): float
        {
            return $this->preco * $this->quantidade;
        }
    
        public function estaDisponivel(): bool
        {
            return $this->quantidade > 0;
        }
    
        public function nomear(): string
        {
            return $this->nome;
        }
    
        public function precificar(): float
        {
            return $this->preco;
        }
    
        public function quantidadeProduto(): int
        {
            return $this->quantidade;
        }
    
        public function __toString(): string
        {
            return "Produto: {$this->nome}. Preço: R$ " . number_format($this->preco, 2) . ", Quantidade: {$this->quantidade}";
        }
    }
    
    $produto = new Produto("Sonho de Creme", 3.00, 100);
    
    echo $produto . "</br>";
    echo "Valor total: R$ " . number_format($produto->calcularValorTotal(), 2) . "</br>";
    echo "Disponível: " . ($produto->estaDisponivel() ? "Sim" : "Não") . "</br>";
    

?>

</body>
</html>