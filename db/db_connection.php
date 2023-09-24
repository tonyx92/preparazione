<?php
$servername = "localhost";  // Nome del server MySQL
$username = "root";        // Nome utente MySQL
$password = "";            // Password MySQL
$dbname = "testing_php_sql";         // Nome del database

// Connessione al database
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}


?>