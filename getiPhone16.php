<?php 
    header('Content-Type: application/json');
    require_once 'check_session.php';
    if (!checkSession()){
        exit;
    }

    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    $size = mysqli_real_escape_string($conn, trim($_GET['size']));

    $query = "SELECT nome, prezzo, rata_mensile, immagine, link_pagina FROM telefoni WHERE nome = '$size'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    $iPhone = mysqli_fetch_assoc($res);
    mysqli_free_result($res);
    mysqli_close($conn);

    echo json_encode($iPhone);
    exit;
?>
