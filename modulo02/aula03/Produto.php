<?php
declare(strict_types=1);

class Produto
{
    //atributos: o que tem
    private string $nome;
    private float $valor;
    private string $descricao;

    //metodo magico de contrucao do objeto // invocado
    public function __construct(string $novoNome, float $novoValor)
    {
        $this->nome = $novoNome;
        $this->valor = $novoValor;
    }

    //métodos: o que pode fazer: GET > Pega o dado, sempre retorna algo; SET > Altera o dado, dificilmente retorna algo.
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        if(strlen($novoNome) < 3){
            die ('Nome não pode ter menos que 3 caracteres');
        }
        $this->nome = $novoNome;
    }

    public function getValor(): float
    {
        return $this->valor;
    }

    public function setValor(float $novoValor): void
    {
        if($novoValor < 0){
            die ('Ops, valor não pode ser negativo');
        }
        $this->valor = $novoValor;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao): void
    {
        $this->descricao = $novaDescricao;
    }

}
