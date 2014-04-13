<?php
    require_once 'libs/common.php';
    require_once 'libs/models/tarvike.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $id = $_POST['id'];
    Tarvike::poistaTarvike($id);
    $_SESSION['ilmoitus'] = "Tarvike poistettu.";
    header('Location: supplies.php');