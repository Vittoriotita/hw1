<?php
    require_once 'dati_db.php'; // dati di connessione al database per non usare troppi require_once
    session_start(); // si crea o riprende una sessione esistente (vuota o piena)

    function checkSession() {
        if(isset($_SESSION['_agora_user_id']) && isset($_SESSION['_agora_username'])) { // controllo se la sessione è già stata definita
            return $_SESSION['_agora_user_id']; 
        } else {
            return false;
        }
    }
?>