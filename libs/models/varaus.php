<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
require_once 'kayttaja.php';
require_once 'mokki.php';
class Varaus {
  
    private $id;
    private $mokki_id;
    private $kayttaja_id;
    private $alkupvm;
    private $loppupvm;

    public function __construct($mokki_id, $kayttaja_id, $alkupvm, $loppupvm) {
        $this->mokki_id = $mokki_id;
        $this->kayttaja_id = $kayttaja_id;
        $this->alkupvm = $alkupvm;
        $this->loppupvm = $loppupvm;
    }
    
    function validateDate($date, $format = 'Y-m-d H:i:s'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
    }
  
    public function onkoKelvollinen() {
        if (!$this->validateDate($this->alkupvm, 'Y-m-d')) {
            return false;
        }
        if (!$this->validateDate($this->loppupvm, 'Y-m-d')) {
            return false;
        }
        return true;
    }
    
    public function getMokkinimi(){
        $mokki = Mokki::findNameByID($this->mokki_id);
        return $mokki->getNimi();
    }
    
    public function getUsernimi() {
        $user = Kayttaja::findNameByID($this->kayttaja_id);
        return $user->getName();
    }
    
    public function getUser(){
        return $this->kayttaja_id;
    } 
    public function getAlku(){
	return $this->alkupvm;
    } 
    public function getLoppu(){
	return $this->loppupvm;
    }
    public function getMokki(){
	return $this->mokki_id;
    }  
    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    
    public function lisaaKantaan() {
    $sql = "INSERT INTO Varaus(mokki_id, kayttaja_id, alkupvm, loppupvm) VALUES(?,?,?,?)";
    $kysely = getTietokantayhteys()->prepare($sql);
    
    $kysely->execute(array($this->getMokki(), $this->getUser(), $this->getAlku(), $this->getLoppu()));
    }
    
    public static function getVaraukset() {
    $sql = "SELECT id, mokki_id, kayttaja_id, alkupvm, loppupvm FROM varaus ORDER BY alkupvm";
    $kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();   
    $tulokset = array();
    foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
      $varaus = new Varaus($tulos->mokki_id,$tulos->kayttaja_id,$tulos->alkupvm,$tulos->loppupvm);
      $varaus->setId($tulos->id);
      $tulokset[] = $varaus;
    }
    return $tulokset;
  }
  
    public function poistaVaraus($tunnus) {
        $sql = "DELETE FROM Varaus where id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($tunnus));
    }
}