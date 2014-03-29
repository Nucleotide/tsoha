<?php
require_once(dirname(dirname(__FILE__)) . '/tietokantayhteys.php');
class Kayttaja {
  
    private $id;
    private $name;
    private $password;

    public function __construct($id,$name,$password) {
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
    
    public function getName(){
	return $this->name;
    } 
    
    public function getPassword(){
        return $this->password;
    }   
    public function getId(){
        return $this->id;
    } 
  
  public static function getKayttajat() {
  $sql = "SELECT id, name, password FROM kayttaja";
  $kysely = getTietokantayhteys()->prepare($sql); $kysely->execute();   
  $tulokset = array();
  foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
    $kayttaja = new Kayttaja($tulos->id,$tulos->name,$tulos->password);

    $tulokset[] = $kayttaja;
  }
  return $tulokset;
  }
  
    public static function etsiKayttajaTunnuksilla($kayttaja, $salasana) {
        $sql = "SELECT id, name, password from kayttaja where name = ? AND password = ? LIMIT 1";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($kayttaja, $salasana));

        $tulos = $kysely->fetchObject();

        if ($tulos === null) {
            return null;
        } else {
            $user = new Kayttaja($tulos->id,$tulos->name,$tulos->password);
            return $user;
        }
    }
  
  public function printUser() {
        var_dump(get_object_vars($this));
  }
}