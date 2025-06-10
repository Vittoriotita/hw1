<?php
    require_once 'check_Session.php';
    if(!checkSession()){
        header("Location: login.php");
        exit();
    }
    $conn = mysqli_connect($dati_db['host'], $dati_db['user'], $dati_db['password'], $dati_db['name']);
    $utente_id = mysqli_real_escape_string($conn, $_SESSION['_agora_user_id']);

    // Controlla se l'utente ha già un carrello

    $search_cart_query = "SELECT * FROM carrello WHERE id = ('$utente_id')";
    $res_search = mysqli_query($conn, $search_cart_query);
    if(mysqli_num_rows($res_search) == 0) {
        $create_cart_query = "INSERT INTO carrello (id) VALUES ('$utente_id')";
        $res_create = mysqli_query($conn, $create_cart_query);
    }
    mysqli_free_result($res_search);

    
    $item = mysqli_real_escape_string($conn, $_GET["q"]);
    $check_quantity_query = "SELECT * FROM carrello_articoli WHERE carrello_id = '$utente_id' AND prodotto = '$item'";
    $res_check = mysqli_query($conn, $check_quantity_query);
    if(mysqli_num_rows($res_check) > 0) {
        // L'elemento è già presente, incrementa la quantità
        $update_quantity_query = "UPDATE carrello_articoli SET quantita = quantita + 1 WHERE carrello_id = '$utente_id' AND prodotto = '$item'";
        $res_update = mysqli_query($conn, $update_quantity_query);
    } else {
        // L'elemento non è presente, aggiungilo al carrello
        $insert_item_query = "INSERT INTO carrello_articoli (carrello_id, prodotto, quantita) VALUES ('$utente_id', '$item', 1)";
        $res_insert = mysqli_query($conn, $insert_item_query);
    }
    mysqli_free_result($res_check);
    mysqli_close($conn);
?>