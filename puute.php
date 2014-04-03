<?php
    require_once 'libs/common.php';
    require_once 'libs/models/puute.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $id = (int)$_GET['id'];
    $muokattava = Puute::findById($id);
    
    naytaNakyma('editneed.php', array(
        'kuvaus' => $muokattava->getKuvaus(),
        'id' => $id));