<?php
$host = "localhost"; 
$dbname = "DB_89134";
$username = "89134";
$password = "stitcH23&%!";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
    echo "Fout bij verbinden database: " . $ex->getMessage();
}
?>