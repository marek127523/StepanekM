<?php

include 'class/iustrednyStepanek.php'; // inkludace interfacu
include 'class/ustrednyStepanek.php'; // inkludovani třídy abstract
include 'class/ustrednaStepanek.php'; // inkludovani třídy

$napetiStepanek = 12; // atribut napětí

$newStepanek = new ustrednaStepanek(); // instance nové třídy

var_dump($newStepanek::TYPE); // vypsání constanty

$newStepanek->setNapetiStepanek($napetiStepanek);   // nastavení atributů -instanční přístup

var_dump($newStepanek->getNapetiStepanek());        // vypsani atributu - instanční způsob