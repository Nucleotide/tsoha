<?php
  require 'libs/common.php';
  	
  if (empty($_POST["username"]) || empty($_POST["password"]) {
    naytaNakyma('login.php');
  }

  $kayttaja = $_POST["username"];
  $salasana = $_POST["password"];
  
  if ("svinhufvud" == $kayttaja && "kissakartano" == $salasana) {
    header('Location: kissalista.php');
  } else {
    naytaNakyma('login.php');
  }