<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
class Kayttaja {
  
  private $id;
  private $name;
  private $password;

  public function __construct($id, $name, $password) {
    $this->id = $id;
    $this->name = $name;
    $this->password = $password;
  }
  public function setName($name){
	$this->name = $name;
  } 
  public function setId($id){
	$this->id = $id;
  } 
  public function setPassword($pw){
	$this->password = $pw;
  }     
  
  public function getKayttajat() {
  $sql = "SELECT id, name, password FROM kayttaja";
  $kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();
    
  $tulokset = array();
  foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
    $kayttaja = new Kayttaja();
    $kayttaja->setId($tulos->id);
    $kayttaja->setName($tulos->name);
    $kayttaja->setPassword($tulos->password);

    $tulokset[] = $kayttaja;
  }
  return $tulokset;
  }
  
  public function printUser() {
        var_dump(get_object_vars($this));
  }
}