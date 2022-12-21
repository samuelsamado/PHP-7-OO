<?php

class Pessoa {
    private string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade){
        $this->setNome($nome);
        $this->setIdade($idade);
    }

    public function getNome(){
        $this->nome;
    }

    public function getIdade(){
        $this->idade;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setIdade(int $idade){
        $this->idade = $idade;
    }
}