<?php

declare(strict_types=1);

class GestorGeral extends Gestor
{
  private float $bonusAnual;

  public function getBonusAnula():float 
  {
    return $this->bonusAnual;
  }

  public function setBonusAnul(float $bonusAnual):void 
  {
    $this->bonusAnual = $bonusAnual;
  }
  
}