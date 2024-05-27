<?php
session_start();
include("conn.php");


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM booking_record WHERE id = '$id'";
    if ($conn->query($sql)) {
        $_SESSION["success"] = "Record has Been successfully deleted";
    } else {
        $_SESSION["error"] = "No record deleted!";
    }
} else {
    $_SESSION["error"] = "Please select first the record to delete";
}
header("location: bookrecord.php");
?>