<?php
require_once "libs/tietokantayhteys.php"; 
require_once "libs/models/kayttaja.php";

$lista = Kayttaja::getKayttajat();

?><!DOCTYPE HTML>
<html>
  <head><title>Test</title></head>
  <body>
    <h1>Users from database</h1>
    <ul>
    <?php foreach($lista as $asia) { ?>
      <li><?php echo $asia->printUser(); ?></li>
    <?php } ?>
    </ul>
  </body>
</html>