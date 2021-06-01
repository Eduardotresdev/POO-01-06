<?php

class Funcionario
{

    public $nome;
    public $horasTrabalhadas;
    public $valorDaHora;

    public function __construct(string $nome, int $horasTrabalhadas, float $valorDaHora)
    {
        $this->nome = $nome;
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->valorDaHora = $valorDaHora;
    }

    public function calcularSalario()
    {
        return $this->horasTrabalhadas * $this->valorDaHora;
    }
}
class Gerente extends Funcionario
{
    public function calcularSalario()
    {
        return '</br>Gerente: '. $this->horasTrabalhadas * $this->valorDaHora;
    }
}

class Vendedor extends Funcionario]
{
    public function calcularSalario()
    {
        return '</br>Vendedor: '. $this->horasTrabalhadas * $this->valorDaHora;
    }
}

$gerente = new Gerente('Eduardo', 25, 30);

echo $gerente->calcularSalario();

$vendedor = new Vendedor('Gabriel', 40, 12);

echo $vendedor->calcularSalario();
