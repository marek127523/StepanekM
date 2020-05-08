<?php


/**
 * @author Marek Stepanek
 */
abstract class ustrednyStepanek implements iustrednyStepanek {
   
  protected $napetiStepanek; //  je viditelná jen ve třídě a při dědění
  
  //funkce pro získání hodnoty
    function getNapetiStepanek() {
      return $this->napetiStepanek;
  }

  //fuknce nastaví hodnotu
  function setNapetiStepanek($napetiStepanek) {
      $this->napetiStepanek = $napetiStepanek;
  }




}
