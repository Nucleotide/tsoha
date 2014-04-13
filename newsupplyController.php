<?php
    require_once 'libs/common.php';
    require_once 'libs/models/tarvike.php';

    $mokki_id = $_POST['mokki'];
    $kuvaus = $_POST['kuvaus'];
    $aika = $_POST['luotu'];
    
    $tarvike = new Tarvike($mokki_id, $kuvaus, $aika);
    
    if ($tarvike->onkoKelvollinen()) {
        $tarvike->lisaaKantaan();
        
        header('Location: supplies.php');
        $_SESSION['ilmoitus'] = "Tarvike lisätty.";
    } else {
        naytaNakyma('addsupply.php', array(
        'virheet' => "Kuvaus ei voi olla tyhjä"));
    }