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
}

class PessoaJuridica extends Pessoa implements Documento
{
    public $cpnj;

    public function __construct(string $cpnj)
    {
        $this->cpnj = $cpnj;
    }

    public function getDocumento()
    {
        return '</br>CPNJ: ' . $this->cpnj;
    }
}

class PessoaFisica extends Pessoa implements Documento
{
    public $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getDocumento()
    {
        return  '</br>CPF: ' . $this->cpf;
    }
}
$pessoa1 = new PessoaJuridica(55149257000100);
echo $pessoa1->getDocumento(); //CNPJ 
$pessoa2 = new PessoaFisica(15756997024);
echo $pessoa2->getDocumento(); //CNPJ 
