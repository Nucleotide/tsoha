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
  
  public funtion getName(){
  	return $name;
  }
  
  public funtion getId(){
  	return $id;
  }
}