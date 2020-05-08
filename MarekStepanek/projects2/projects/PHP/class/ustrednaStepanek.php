<?php

// třída dědí abstraktní třídu

/*
 * @author Marek Stepanek
 */
declare (strict_types=1);

class ustrednaStepanek extends ustrednyStepanek{
    
    const TYPE = 1;  // konstanta se jednou nastaví a pak se nemění

   
    //funkce kvůli atributu
    public function getNapetiStepanek() {
      return $this->napetiStepanek;
  }
  
//fuknce nastaví hodnotu
   public function setNapetiStepanek($napetiStepanek) {
      $this->napetiStepanek = $napetiStepanek;
  }
}
