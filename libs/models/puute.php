<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
require_once 'kayttaja.php';
class Puute {
  
  private $virheet = array();
  private $id;
  private $mokki_id;
  private $kayttaja_id;
  private $kuvaus;
  private $luotu;

  public function __construct($kayttaja_id, $mokki_id, $kuvaus, $luotu) {
    $this->mokki_id = $mokki_id;
    $this->kayttaja_id = $kayttaja_id;
    $this->kuvaus = $kuvaus;
    $this->luotu = $luotu;
    }
    
    
    public function onkoKelvollinen() {
        return empty($this->virheet);
    }
    public function getVirheet() {
        return $this->virheet;
    }    

    public function getMokki(){
      return $this->mokki_id;
    }
    
    public function getUsername() {
        return Kayttaja::findNameByID($this->kayttaja_id);
    }

    public function getUser(){
        return $this->kayttaja_id;
    } 
    public function getKuvaus(){
	return $this->kuvaus;
    } 
    public function getLuotu(){
	return $this->luotu;
    }
    public function getId(){
	return $this->Id;
    }    
    public function setMokki($mokkiid){
      $this->mokki_id = $mokkiid;
    }

    public function setUser($userid){
        $this->kayttaja_id=$userid;
    } 
    public function setKuvaus($kuvaus){
	$this->kuvaus = $kuvaus;
        
        if (trim($this->kuvaus) == '') {
            $this->virheet['kuvaus'] = "Kuvaus ei saa olla tyhjä.";
        } else { 
            unset($this->virheet['kuvaus']);
        }
    } 
    public function setLuotu($luotu){
	$this->luotu = $luotu;
    }     
  
  public static function getPuutteet() {
  $sql = "SELECT id, kayttaja_id, mokki_id, kuvaus, luotu FROM puute";
  $kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();   
  $tulokset = array();
  foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
    $puute = new Puute($tulos->id,$tulos->kayttaja_id,$tulos->mokki_id,$tulos->kuvaus,$tulos->luotu);

    $tulokset[] = $puute;
  }
  return $tulokset;
  }
  
    public function lisaaKantaan() {
    $sql = "INSERT INTO Puute(kayttaja_id, mokki_id, kuvaus,luotu) VALUES(?,?,?,?)";
    $kysely = getTietokantayhteys()->prepare($sql);

    $kysely->execute(array($this->getUser(), $this->getMokki(), $this->getKuvaus(), $this->getLuotu()));
    }
}