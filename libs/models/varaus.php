<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
class Puute {
  
  private $id;
  private $mokki_id;
  private $kayttaja_id;
  private $alkupvm;
  private $loppupvm;

  public function __construct($id, $mokki_id, $kayttaja_id, $alkupvm, $loppupvm) {
    $this->id = $id;
    $this->mokki_id = $mokki_id;
    $this->kayttaja_id = $kayttaja_id;
    $this->alkupvm = $alkupvm;
    $this->loppupvm = $loppupvm;
  }
}