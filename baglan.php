<?php

// MySQL veritabanına bağlanma
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aracinisat";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

?>