<?php
include("conn.php");

if(isset($_POST["id"])){
    $id = $_POST["id"];
    $sql = "SELECT * FROM booking_record WHERE id='$id'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    echo json_encode($row);
}
?>