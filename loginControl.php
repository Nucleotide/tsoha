<?php

require_once 'libs/common.php';
require_once 'libs/models/kayttaja.php';

  if (empty($_POST["username"])) {
    naytaNakyma('login.php', array(
      'virhe' => "Kirjautuminen epäonnistui! Et antanut käyttäjätunnusta.",));
  }
  
  $kayttaja = $_POST["username"];

  if (empty($_POST["password"])) {
    naytaNakyma('login.php', array(
      'kayttaja' => $kayttaja,
      'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",));
  }
  
  $salasana = $_POST["password"];
  
  $kirjautuja = Kayttaja::etsiKayttajaTunnuksilla($kayttaja, $salasana);

  if ($kirjautuja->getName() === $kayttaja && $kirjautuja->getPassword() === $salasana) {
    $_SESSION['user'] = $kirjautuja->getId();
    $_SESSION['ilmoitus'] = "Kirjautuminen ok!";
    header('Location: index.php');
  } else {
    naytaNakyma('login.php', array(
      'kayttaja' => $kayttaja,
      'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä.",));
  }