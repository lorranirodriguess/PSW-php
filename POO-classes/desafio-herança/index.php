<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class Cliente
{
    public string $logradouro;
    public string $bairro;

    function __construct(string $logradouro, string $bairro)
    {
        $this->logradouro = $logradouro;
        $this->bairro = $bairro;
    }

    function verEndereco() : string
    {
        return "O cliente se localiza no logradouro: {$this->logradouro}, e bairro: {$this->bairro}";
    }
}

class ClientePessoaFisica extends Cliente
{
    private string $nome;
    private int $cpf;

    function __construct(string $nome, int $cpf, string $logradouro, string $bairro)
    {
        parent::__construct($logradouro, $bairro); 
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    function verInformacaoUsuario() : string
    {
        return "O cliente {$this->nome}, portador do CPF: {$this->cpf}, localiza-se no seguinte endereço: Logradouro-> {$this->logradouro}; Bairro-> {$this->bairro}";
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }
}

class ClientePessoaJuridica extends Cliente 
{
    private int $cnpj;
    private string $nomeEmpresa;

    function __construct(int $cnpj, string $nomeEmpresa, string $logradouro, string $bairro)
    {
        parent::__construct($logradouro, $bairro); 
        $this->cnpj = $cnpj;
        $this->nomeEmpresa = $nomeEmpresa;
    }

    function verInformacaoEmpresa() : string
    {
        return "A empresa {$this->nomeEmpresa}, portadora do CNPJ: {$this->cnpj}, localiza-se no seguinte endereço: Logradouro-> {$this->logradouro}; Bairro-> {$this->bairro}";
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getNomeEmpresa() {
        return $this->nomeEmpresa;
    }
}

$clientePF = new ClientePessoaFisica("João Silva", 12345678900, "Dom Bosco", "São Francisco");
$clientePJ = new ClientePessoaJuridica(12345678901234, "Empresa XYZ", "Avenida Central", "Centro");

echo $clientePF->verInformacaoUsuario() . "<br>";
echo $clientePJ->verInformacaoEmpresa() . "<br>";
?>

</body>
</html>