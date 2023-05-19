<?php
$servername = "3306"; // of je specifieke hostnaam
$username = "root";
$password = "Mashal123@";
$dbname = "Winkel";

// Maak de verbinding
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleer de verbinding
if ($conn->connect_error) {
    die("Kan geen verbinding maken met de database: " . $conn->connect_error);
}

// Echo de verbonden tekst
echo "Connected to database ($dbname).";

// Sluit de verbinding
$conn->close();
?>