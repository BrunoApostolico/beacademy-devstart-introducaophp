<?php
declare(strict_types=1);

class Cliente extends Usuario
{
    private string $dataCadastro;

    /**
     * @return string
     */
    public function getDataCadastro(): string
    {
        return $this->dataCadastro;
    }

    /**
     * @param string $dataCadastro
     */
    public function setDataCadastro(string $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }

}