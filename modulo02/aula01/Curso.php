<?php

declare(strict_types=1);

class Curso{

  public string $nomeCurso;
  public int $cargaHoraria;
  public string $descricao;

  public function getNomeCurso():string 
  {
    return $this->nomeCurso;
  }

  public function setNomeCurso(string $novoNomeCurso):void 
  {
    
    $this->nomeCurso = $novoNomeCurso;
  }

  public function getcargaHoraria():float 
  {
    return $this->cargaHoraria;
  }

  public function setcargaHoraria(float $novoCargaHoraria):void 
  {

    $this->cargaHoraria = $novoCargaHoraria;
  }

  public function getDescricao():string 
  {
    return $this->descricao;
  }

  public function setDescricao(string $novoDescricao):void 
  {
    
    $this->descricao = $novoDescricao;
  }

}