<?php
    require_once 'libs/common.php';
    require_once 'libs/models/puute.php';

    $mokki_id = $_POST['mokki'];
    $user_id= $_POST['user'];
    $kuvaus = $_POST['kuvaus'];
    $aika = $_POST['luotu'];
    
    $puute = new Puute($user_id, $mokki_id, $kuvaus, $aika);
    
    if ($puute->onkoKelvollinen()) {
        $puute->lisaaKantaan();
        
        header('Location: needs.php');
        $_SESSION['ilmoitus'] = "Puute lisätty.";
    } else {
        naytaNakyma('addneed.php', array(
        'virheet' => "Kuvaus ei voi olla tyhjä"));
    }