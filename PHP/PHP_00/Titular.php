<?php

class Titular
{
    private string $titular;
    private Cpf $cpf;
    
    public function __construct(Cpf $cpf, string $nome) {
        $this->titular = $nome;
                
    }
     
    public function getCpf(): string 
    {
        return $this->cpf;
    }

    public function getTitular(): string
     {
        return $this->titular;
    } 
}
