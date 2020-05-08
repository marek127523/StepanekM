<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Forms;

/**
 * Description of PrijmeniProdukt
 *
 * @author Stepanek
 */
class PrijmeniProdukt extends \Nette\Application\UI\Form{
    
   public function  __construct($parent, $name){
       
       parent::__construct($parent, $name);
       
       
       $this->addText ('Nazev_objektu','Název objektu' );
       
       $this->addTextArea ("Popis_objektu","Popis objektu");
       
       $this->addImage ("Obrazek","Obrazek");
       
       $this->addText("cena","cena");
       $this->addSelect('Kategorie','Kategorie', array('nové','použité','vybalené'))->setRequired('Nutný výběr')
              ->addRule(\Nette\Forms\Form::REQUIRED,'Nutný výběr');
       
       $this->addRadioList('Aktivita','Aktivita', array ('Aktivní','Pasivní'));
       
       $this->addCheckbox("Skladem","Vyprodáno");
       
       $this->addSubmit("Ulozit","Ulozit");
       
       $this->addPassword("Heslo", "Heslo");
       
       $this->addUpload("zvuk","zvuk");
       
       $this->onSuccess[] = [$this, "formSubmitted"];
       
     
   }
   
   public function formSubmitted($form){
       $values = $this->getValues(true);
       dump($values);
       die;
   }
   
}
