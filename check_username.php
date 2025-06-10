<?php 
    require_once 'dati_db.php';
    header('Content-Type: application/json'); // Set the content type to JSON
    
    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    $username = mysqli_real_escape_string($conn, $_GET["q"]); // Use GET method to retrieve the username
    $query = "SELECT username FROM utente WHERE username = '$username'";
    $res = mysqli_query($conn, $query);
    echo json_encode(array('exists' => mysqli_num_rows($res) > 0 ? true : false));
    mysqli_close($conn);