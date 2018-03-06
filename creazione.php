<?php
    $nuovo_db = "db_bollette";
    $t_utenti = "Utenti";
    $t_credenziali = "Credenziali";
    $t_bollette = "Bollette";

    $conn = @mysqli_connect("localhost", "root", "")
        or die("Impossibile connettersi al db");

    echo "Connessione al server stabilita<br>";

    $crea_db = "CREATE DATABASE IF NOT EXISTS $nuovo_db";

    $usalo = "USE $nuovo_db";

    $risultato = mysqli_query($conn, $crea_db)
        or die("Impossibile creare il DB");

    echo "DB creato<br>";

    $selezionato = mysqli_query($conn, $usalo)
        or die("Impossibile connettersi al DB");

    echo "Connessione al DB stabilita<br>";

    if($risultato)
        $msg = "<p><b>Il database è tato creato</b></p><br>";
?>