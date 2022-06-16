<?php

declare(strict_types=1);

class Disciplina{

  public string $nomeDisciplina;
  public int $cargaHorariaDaDisciplina;
  public string $nomeProfessor;

  public function getNomeDisciplina():string 
  {
    return $this->nomeDisciplina;
  }

  public function setNomeDisciplina(string $novoNomeDisciplina):void 
  {
    
    $this->nomeDisciplina = $novoNomeDisciplina;
  }

  public function getcargaHorariaDaDisciplina():float 
  {
    return $this->cargaHorariaDaDisciplina;
  }

  public function setcargaHorariaDaDisciplina(float $novoCargaHorariaDaDisciplina):void 
  {

    $this->cargaHorariaDaDisciplina = $novoCargaHorariaDaDisciplina;
  }

  public function getNomeProfessor():string 
  {
    return $this->nomeProfessor;
  }

  public function setNomeProfessor(string $novoNomeProfessor):void 
  {
    
    $this->nomeProfessor = $novoNomeProfessor;
  }

}