<?php
$con = new mysqli('localhost', 'root', '', 'crudoperation', 3307);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// echo "Connected successfully!"; // Commented out or removed
?>
