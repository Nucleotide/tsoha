<?php
  require 'libs/common.php';
  
  if (empty($_POST["username"]) || empty($_POST["password"])) {
    naytaNakyma('login.php');
  }

  $kayttaja = $_POST["username"];
  $salasana = $_POST["password"];
  
  if ("fff" == $kayttaja && "fff" == $salasana) {
    header('Location: index.php');
  } else {
    naytaNakyma('login.php', array('kayttaja' => $kayttaja, 'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä.",));
  }