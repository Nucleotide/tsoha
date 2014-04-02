<?php
    require_once 'libs/common.php';
    require_once 'libs/models/puute.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    naytaNakyma('addneed.php', array(
        'puute' => new Puute()));

   
    
    $puute = new Puute();
    $puute->setMokki($_POST['mokki']);
    $puute->setUser($_POST['user']);
    $puute->setKuvaus($_POST['kuvaus']);
    $puute->setLuotu($_POST['luotu']);
    
    if ($puute->onkoKelvollinen()) {
        $puute->lisaaKantaan();
        
        header('Location: needs.php');
        $_SESSION['ilmoitus'] = "Puute lisätty.";
    } else {
        $virheet = $puute->getVirheet();

        naytaNakymä('addneed.php', array(
        'puute' => $puute,
        'virheet' => $virheet));
    }