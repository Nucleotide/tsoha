<?php
	require_once 'tietokantayhteys.php';
	$sql = "select 1+1 as two";
	$kysely = getTietokantayhteys()->prepare($sql);
	
	if ($kysely->execute()) {
	  $kakkonen = $kysely->fetchColumn();
	  var_dump($kakkonen);
	}