<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of StepanekContactPresenter
 *
 * @author Stepanek
 */
class StepanekContactPresenter extends BasePresenter {

    public function renderDefault() {
        
    } 
    
    
    public function createComponentContact($name) {
        return new \Forms\Contact($this, $name);
    }
}
