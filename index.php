<?php
    require_once 'libs/common.php';
    require_once 'libs/models/kayttaja.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $user = Kayttaja::findNameByID($_SESSION['user']);
    $nimi = $user->getName();
    naytaNakyma('etusivu.php', array(
        'tervehdys' => $nimi));