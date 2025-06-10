<?php
    header('Content-Type: application/json');
    require_once "dati_db.php";

    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    $item = mysqli_real_escape_string($conn, $_GET['query']);

    $query = "SELECT nome, prezzo, link_pagina FROM prodotti WHERE nome LIKE '$item%'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    $results = array();
    while($row = mysqli_fetch_assoc($res)) {
        $results[] = $row;
    }
    mysqli_free_result($res);
    mysqli_close($conn);

    echo json_encode($results);
    exit;
?>