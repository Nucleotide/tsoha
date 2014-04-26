<?php
    require_once 'libs/common.php';
    require_once 'libs/models/puute.php';

    $user_id= $_POST['user'];
    $kuvaus = $_POST['kuvaus'];
    $aika = $_POST['luotu'];
    $id = $_POST['id'];
    $puute = Puute::findByID($id);
    
    if (trim($kuvaus) != '') {
        $puute->paivita($id,$user_id, $kuvaus, $aika);
        
        header('Location: needs.php');
        $_SESSION['ilmoitus'] = "Muokkaus onnistui.";
    } else {
        naytaNakyma('editneed.php', array(
        'virheet' => "Kuvaus ei voi olla tyhjä",
        'kuvaus' => $kuvaus,
        'id' => $id));
    }