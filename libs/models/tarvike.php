<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
class Tarvike {
  
  private $id;
  private $mokki_id;
  private $kuvaus;
  private $luotu;

  public function __construct($id, $mokki_id, $kuvaus, $luotu) {
    $this->id = $id;
    $this->mokki_id = $mokki_id;
    $this->kuvaus = $kuvaus;
    $this->luotu = $luotu;
  }
}