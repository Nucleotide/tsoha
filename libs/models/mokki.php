<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');

class Mokki {
  
  private $id;
  private $name;

  public function __construct($id, $name) {
    $this->id = $id;
    $this->name = $name;
  }
  public function setName($name){
	$this->name = $name;
  } 
  public function setId($id){
	$this->id = $id;
  }   
  public function getNimi(){
	return $this->name;
  } 
  public function getId(){
	return $this->id;
  }   
  
  public static function haeKaikki() {
    $sql = "SELECT id, name FROM mokki";
    $kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();   
    $tulokset = array();
    foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
      $mokki = new Mokki($tulos->id,$tulos->name);

      $tulokset[] = $mokki;
    }
    return $tulokset;
  }
  
      public static function findNameByID($id){
        $sql = "SELECT id, name from mokki where id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($id));

        $tulos = $kysely->fetchObject();
        $mokki = new Mokki($tulos->id,$tulos->name);
        return $mokki;
    }

}