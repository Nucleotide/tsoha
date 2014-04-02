<?php
  require_once 'libs/common.php';
  
    if ($_SESSION['user']) {
        header('Location: index.php');
    }

  naytaNakyma('login.php');