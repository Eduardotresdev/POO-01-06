<?php
//Exercicio 01/02
interface Documento
{
    public function getDocumento();
}

class Pessoa implements Documento
{
    public $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function getDocumento()
    {
        return $this->nome;
    }

    public function imprimir()
    {
        return 'Nome: ' . $this->nome;
    }
}

class PessoaJuridica extends Pessoa implements Documento
{
    public $cpnj;

    public function __construct(string $nome, int $cpnj)
    {
        parent::__construct($nome, $cpnj);
        $this->cpnj = $cpnj;
    }

    public function getDocumento()
    {
        return '</br>CPNJ: ' . $this->cpnj . '</br></br>';
    }
}

class PessoaFisica extends Pessoa implements Documento
{
    public $cpf;

    public function __construct(string $nome, int $cpf)
    {
        parent::__construct($nome, $cpf);
        $this->cpf = $cpf;
    }

    public function getDocumento()
    {
        return  '</br>CPF: ' . $this->cpf . '</br></br>';
    }
}
$pessoa1 = new PessoaJuridica('CodeInCoffee', 55149257000100);
echo $pessoa1->imprimir() . $pessoa1->getDocumento();  
$pessoa2 = new PessoaFisica('Eduardo A. Trés de Souza', 15756997024);
echo $pessoa2->imprimir() . $pessoa2->getDocumento();  