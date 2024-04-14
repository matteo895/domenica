<<?php

    // Connessione al database
    $servername = "localhost"; // Indirizzo del server MySQL
    $username = 'root'; // Nome utente del database (puoi usare 'root' come default per MySQL in ambiente locale)
    $password = ''; // Password del database (solitamente vuota per MySQL in ambiente locale)
    $dbname = "invio_form"; // Nome del database

    // Creazione della connessione
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica della connessione
    if ($conn->connect_error) {
        die("Connessione al database fallita: " . $conn->connect_error);
    }

    // Elaborazione dei dati del form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        // Prepara la query SQL per l'inserimento dei dati
        $sql = "INSERT INTO form (username, email, age, password) VALUES ('$username', '$email', '$age', '$password')";

        // Esegui la query SQL per inserire i dati nel database
        if ($conn->query($sql) === TRUE) {
            // Reindirizza alla pagina di successo
            header("Location: successo.php");
            exit;
        } else {
            echo "Errore nell'inserimento dei dati nel database: " . $conn->error;
        }
    }

    // Chiudi la connessione al database
    $conn->close();

    ?> <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

    </body>

    </html>