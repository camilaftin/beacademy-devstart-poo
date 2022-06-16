<?php

declare(strict_types=1);

class Produto{
  //atributos
  private string $nome;
  private float $valor;
  private string $descricao;

  //metodos
  // public function teste(string $palavra):string
  // {
  //   return "Voce esta testando com a {$palavra}";
  // }

  public function __construct(string $novoNome, float $novoValor){

    $this->nome = $novoNome;
    $this->valor = $novoValor;

  }

  public function getDescricao():string 
  {
    return $this->descricao;
  }

  public function setDescricao(string $novaDescricao):void 
  {
    $this->descricao = $novaDescricao;
  }

  public function getNome():string 
  {
    return $this->nome;
  }

  public function setNome(string $novoNome):void 
  {
    
    $this->nome = $novoNome;
  }

  public function getValor():float 
  {
    return $this->valor;
  }

  public function setValor(float $novoValor):void 
  {

    if($novoValor < 0){
      die('Ops, valor nao pode ser negativo');
    }

    $this->valor = $novoValor;
  }

}