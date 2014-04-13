<?php
    require_once 'libs/common.php';
    require_once 'libs/models/tarvike.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $id = (int)$_GET['id'];
    $muokattava = Tarvike::findById($id);
    
    naytaNakyma('editsupply.php', array(
        'kuvaus' => $muokattava->getKuvaus(),
        'id' => $id));