<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão05</title>
</head>
<body>

<?php 
    class Aluno
    {
        public string $nome;
        public string $matricula;
        public array $notas;
    
        public function __construct($nome, $matricula)
        {
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->notas = [];
        }
    
        public function adicionarNota(float $nota): void
        {
            $this->notas[] = $nota;
        }
    
        public function calcularMedia(): float
        {
            return array_sum($this->notas) / count($this->notas);
        }
    
        public function verificarSituacao(): string
        {
            $media = $this->calcularMedia();
            return $media >= 6.0 ? "Aprovado" : "Reprovado";
        }
    
        public function nomear(): string
        {
            return $this->nome;
        }
    
        public function matricular(): string
        {
            return $this->matricula;
        }
    
        public function valorNotas(): array
        {
            return $this->notas;
        }
    
        public function __toString(): string
        {
            return "Aluno: {$this->nome} (Matrícula: {$this->matricula})";
        }
    }
    

    $aluno = new Aluno("Ana Beatriz", "987654321");
    
    $aluno->adicionarNota(9.5);
    $aluno->adicionarNota(9.0);
    $aluno->adicionarNota(8.5);
    
    echo $aluno . "</br>";
    echo "Média: " . number_format($aluno->calcularMedia(), 2) . "</br>";
    echo "Situação: " . $aluno->verificarSituacao() . "</br>";
    
?>
    
</body>
</html>