<?php
    require_once 'libs/common.php';
    require_once 'libs/models/tarvike.php';

    $kuvaus = $_POST['kuvaus'];
    $aika = $_POST['luotu'];
    $id = $_POST['id'];
    $tarvike = Tarvike::findByID($id);
    
    if (trim($kuvaus) != '') {
        $tarvike->paivita($id, $kuvaus, $aika);
        
        header('Location: supplies.php');
        $_SESSION['ilmoitus'] = "Muokkaus onnistui.";
    } else {

        naytaNakyma('editsupply.php', array(
        'virheet' => "Kuvaus ei voi olla tyhjä",
        'kuvaus' => $kuvaus,
        'id' => $id));
    }