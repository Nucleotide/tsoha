<?php
    require_once 'libs/common.php';
    require_once 'libs/models/tarvike.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    naytaNakyma('addsupply.php');