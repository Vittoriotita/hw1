<?php
    require_once 'check_Session.php';
    if(!checkSession()){
        header("Location: login.php");
        exit();
    }
    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    $utente_id = mysqli_real_escape_string($conn, $_SESSION['_agora_user_id']);

    $search_cart_query = "SELECT * FROM carrello WHERE id = ('$utente_id')";
    $res_search = mysqli_query($conn, $search_cart_query);
    if(mysqli_num_rows($res_search) == 0) {
        mysqli_close($conn);
        exit;
    }
    $delete_cart_query = "UPDATE carrello SET prezzo_totale = 0 WHERE id = ('$utente_id')";
    mysqli_query($conn, $delete_cart_query);
    $delete_cart_query = "DELETE FROM carrello_articoli WHERE carrello_id = ('$utente_id')";
    mysqli_query($conn, $delete_cart_query);

    mysqli_free_result($res_search);
    mysqli_close($conn);
?>