<?php 
    header('Content-Type: application/json');
    require_once 'check_session.php';
    if (!checkSession()){
        exit;
    }

    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    $query = "SELECT nome, prezzo, rata_mensile, immagine, link_pagina FROM telefoni";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    $iPhoneArray = array();
    while($row = mysqli_fetch_assoc($res)) {
        $iPhoneArray[] = $row;
    }
    mysqli_free_result($res);
    mysqli_close($conn);

    echo json_encode($iPhoneArray);
    exit;
?>
