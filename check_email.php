<?php
    require_once 'dati_db.php';
    header('Content-Type: application/json');

    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    $email = mysqli_real_escape_string($conn, $_GET["q"]);
    $query = "SELECT email FROM utente WHERE email = '$email'";
    $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
    echo json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false));
    mysqli_close($conn);
