<?php

$conn = new mysqli('localhost','root','','stray_impact');
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}

?>