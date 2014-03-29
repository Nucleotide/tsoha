<?php
  require_once 'libs/common.php';

  unset($_SESSION['user']);

  header('Location: index.php');
?>