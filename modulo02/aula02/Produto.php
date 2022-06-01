<?php
declare(strict_types=1);

class Produto
{
    //atributos - o que tem
    private string $nome; 
    private float $valor;

    //metodos - o que pode fazer
    public function pegarNome(): string 
    {
        return $this->nome;
    }

    public function alterarNome(string $novoNome): void
    {
        if(strlen($novoNome) < 3){
            die ('Nome não pode ter menos que 3 caracteres');
        }
               $this->nome = $novoNome;
    }

    public function pegarValor(): float
    {
        return $this->valor;
    }

    public function alterarValor(float $novoValor): void
    {
        if($novoValor < 0){
           die ('Ops, valor não pode ser negativo');
        }
        $this->valor = $novoValor;
    }

}
