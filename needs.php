<?php
    require_once 'libs/common.php';
    require_once 'libs/models/puute.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $puutteet = Puute::getPuutteet();
    naytaNakyma('puute.php', array('puutteet' => $puutteet));