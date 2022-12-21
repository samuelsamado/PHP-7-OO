<?php

class Pessoa {
    private string $nome;
    private int $idade;
    private static $numPessoas = 0;

    public function __construct(string $nome, int $idade){
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->validaIdade($idade);
        self::$numPessoas++;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public static function getNumPessoas(){
        return self::$numPessoas;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setIdade(int $idade){
        $this->idade = $idade;
    }

    public function validaIdade(int $idade){
        if($this->getIdade() > 0 && $this->getIdade() < 120){
            $this->setIdade($idade);
        }else{
            die("Idade não permitida!");
        }
    }
}