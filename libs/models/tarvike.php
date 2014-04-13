<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
require_once 'mokki.php';
class Tarvike {
  
  private $id;
  private $mokki_id;
  private $kuvaus;
  private $luotu;

  public function __construct($mokki_id, $kuvaus, $luotu) {
    $this->mokki_id = $mokki_id;
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
        $mokki = Mokki::findNameByID($this->mokki_id);
        return $mokki->getNimi();
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

    public function setKuvaus($kuvaus){
	$this->kuvaus = $kuvaus;
    } 
    public function setLuotu($luotu){
	$this->luotu = $luotu;
    }     
  
  public static function getTarvikkeet() {
    $sql = "SELECT id, mokki_id, kuvaus, luotu FROM tarvike ORDER BY id";
    $kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();   
    $tulokset = array();
    foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
      $tarvike = new Tarvike($tulos->mokki_id,$tulos->kuvaus,$tulos->luotu);
      $tarvike->setId($tulos->id);
      $tulokset[] = $tarvike;
    }
    return $tulokset;
  }
  
    public function lisaaKantaan() {
    $sql = "INSERT INTO Tarvike(mokki_id, kuvaus,luotu) VALUES(?,?,?)";
    $kysely = getTietokantayhteys()->prepare($sql);
    
    $kysely->execute(array($this->getMokki(), $this->getKuvaus(), $this->getLuotu()));
    }
    
    public function poistaTarvike($tunnus) {
        $sql = "DELETE FROM Tarvike where id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($tunnus));
    }
    
    public static function findByID($id){
        $sql = "SELECT id, mokki_id, kuvaus, luotu FROM tarvike where id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($id));

        $tulos = $kysely->fetchObject();
        $tarvike = new Tarvike($tulos->mokki_id,$tulos->kuvaus,$tulos->luotu);
        $tarvike->setId($tulos->id);
        return $tarvike;
    }
    
    public static function paivita($id, $kuvaus, $aika){
        $sql = "UPDATE tarvike SET kuvaus = ?, luotu = ? WHERE id = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($kuvaus, $aika,$id));
    }
}
