<?php
    require_once 'libs/common.php';
  
    if (empty($_SESSION['user'])) {
        header('Location: login.php');
    }

    naytaNakyma('mokki.php');