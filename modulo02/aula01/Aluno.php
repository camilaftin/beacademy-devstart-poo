<?php

declare(strict_types=1);

class Aluno{

  public string $nome;
  public string $cpf;


  public function getNome():string 
  {
    return $this->nome;
  }

  public function setNome(string $novoNome):void 
  {
    
    $this->nome = $novoNome;
  }

  public function getCPF():float 
  {
    return $this->cpf;
  }

  public function setCPF(float $novoCPF):void 
  {

    $this->cpf = $novoCPF;
  }

}





