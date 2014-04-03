<?php
    require_once 'libs/common.php';
    require_once 'libs/models/puute.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $id = $_POST['id'];
    Puute::poistaPuute($id);
    $_SESSION['ilmoitus'] = "Puute poistettu.";
    header('Location: needs.php');