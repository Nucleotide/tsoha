<?php
  require_once '../common.php';

  unset($_SESSION['user']);

  header('Location: ../../index.php');
?>