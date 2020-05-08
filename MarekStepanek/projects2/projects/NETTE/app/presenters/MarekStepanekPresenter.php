<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of MarekStepanek
 *
 * @author uzivatel
 */
class MarekStepanekPresenter extends BasePresenter {

 public function renderDefault() {
        
    } 

 public function createComponentMarekProdukt($name) {
  return new \Forms\MarekProdukt($this, $name);
      
    } 

}
