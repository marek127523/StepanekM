<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of PotravinylPresenter
 *
 * @author Marek Stepanek
 */
class PotravinyPresenter extends BasePresenter{
     public function renderDefault() {
        
    } 
    
    
    public function createComponentPotraviny($name) {
        return new \Forms\Potraviny($this, $name);
    }
}
