<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Presenters;

/**
 * Description of StepanekkPresenter
 *
 * @author Stepanek
 */
class StepanekPresenter extends BasePresenter {
    
    
    public function renderDefault (){
    $this->template->radek = 20;
    $this->template->predek = 1;
    $users = new \Models\Users ();
    $this->template->users = $users->getAllUsers();
    }
}
