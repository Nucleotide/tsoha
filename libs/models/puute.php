<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
require_once 'kayttaja.php';
require_once 'mokki.php';
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
        if (trim($this->kuvaus) == '') {
            return false;
        }
        return true;
    }  

    public function getMokki(){
      return $this->mokki_id;
    }
    public function getMokkiname(){
        $mokki = Mokki::findNameByID($this->kayttaja_id);
        return $mokki->getNimi();
    }
    
    public function getUsername() {
        $user = Kayttaja::findNameByID($this->kayttaja_id);
        return $user->getName();
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
	return $this->id;
    }    
    public function setMokki($mokkiid){
      $this->mokki_id = $mokkiid;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function setUser($userid){
        $this->kayttaja_id=$userid;
    } 
    public function setKuvaus($kuvaus){
	$this->kuvaus = $kuvaus;
    } 
    public function setLuotu($luotu){
	$this->luotu = $luotu;
    }     
  
  public static function getPuutteet() {
    $sql = "SELECT id, kayttaja_id, mokki_id, kuvaus, luotu FROM puute ORDER BY id";
    $kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();   
    $tulokset = array();
    foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
      $puute = new Puute($tulos->kayttaja_id,$tulos->mokki_id,$tulos->kuvaus,$tulos->luotu);
      $puute->setId($tulos->id);
      $tulokset[] = $puute;
    }
    return $tulokset;
  }
  
    public function lisaaKantaan() {
    $sql = "INSERT INTO Puute(kayttaja_id, mokki_id, kuvaus,luotu) VALUES(?,?,?,?)";
    $kysely = getTietokantayhteys()->prepare($sql);
    
    $kysely->execute(array($this->getUser(), $this->getMokki(), $this->getKuvaus(), $this->getLuotu()));
    }
    
    public function poistaPuute($tunnus) {
        $sql = "DELETE FROM Puute where id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($tunnus));
    }
    
    public static function findByID($id){
        $sql = "SELECT id, kayttaja_id, mokki_id, kuvaus, luotu FROM puute where id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($id));

        $tulos = $kysely->fetchObject();
        $puute = new Puute($tulos->kayttaja_id,$tulos->mokki_id,$tulos->kuvaus,$tulos->luotu);
        $puute->setId($tulos->id);
        return $puute;
    }
    
    public static function paivita($id,$user_id, $kuvaus, $aika){
        $sql = "UPDATE puute SET kayttaja_id = ?, kuvaus = ?, luotu = ? WHERE id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($user_id, $kuvaus, $aika,$id));
    }
}