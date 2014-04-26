<?php
    require_once 'libs/common.php';
    require_once 'libs/models/varaus.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $id = $_POST['id'];
    Varaus::poistaVaraus($id);
    $_SESSION['ilmoitus'] = "Varaus poistettu.";
    header('Location: index.php');