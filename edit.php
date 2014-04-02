<?php
    require_once 'libs/common.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }
    
    $edit = Puute::getPuutteet();
    naytaNakyma('edit.php', array('edit' => $edit));