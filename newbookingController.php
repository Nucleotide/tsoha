<?php
    require_once 'libs/common.php';
    require_once 'libs/models/varaus.php';

    $mokki_id = $_POST['mokki'];
    $user_id= $_POST['user'];
    $alkupvm = $_POST['alku'];
    $loppupvm = $_POST['loppu'];
    
    $varaus = new Varaus($mokki_id, $user_id, $alkupvm, $loppupvm);
    
    if ($varaus->onkoKelvollinen()) {
        $varaus->lisaaKantaan();
        
        header('Location: index.php');
        $_SESSION['ilmoitus'] = "Varaus luotu!";
    } else {

        naytaNakyma('addbooking.php', array(
        'virheet' => "Tarkista syöttämäsi päivämäärät"));
    }