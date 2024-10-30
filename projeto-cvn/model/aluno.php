<?php

class Aluno {

    private $nome;
    private $sobrenome;
    private $email;
    private $whatsapp;
    private $senha;
    private $cpf;

    public function setSenha ($p){
        return $this->senha = $p;
        }
        
        public function getSenha (){
        return $this->senha;
        }

    public function setWhatsapp($p){
        return  $this->whatsapp = $p;
    }

    public function getWhatsapp(){
        return $this->whatsapp;
    }

    public function setCidade($p){
        return $this->cidade = $p;
    }

    public function getCidade($p){
        return $this->cidade;
    }

    public function setEmail($p){
        return $this->email = $p;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setSobrenome($p){
        return $this->sobrenome = $p;
    }

    public function getSobrenome(){
        return $this->sobrenome;
    } 

    public function setNome ($p){
    return $this->nome = $p;
    }
    
    public function getNome (){
    return $this->nome;
    }


    public function setCpf($p){
        return $this->cpf = $p;
    }

    public function getCpf(){
        return $this->cpf;;
    }
}

$a = new Aluno();
var_dump($a);


?>