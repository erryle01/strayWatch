<?php 
session_start();
include("conn.php");

if(isset($_POST["submit"])){
    $id = $_POST["id"];
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $sql = "UPDATE booking_record SET firstName='$firstName', middleName='$middleName', lastName='$lastName', phone='$phone' , email='$email' WHERE id = '$id'";
    if($conn->query($sql)){
        $_SESSION['success'] = "Client Information successfully Updated!!";
    }else{
        $_SESSION['error'] = $conn->error;
    }

}else {
    $_SESSION['error'] = 'Please Select First Client to Edit';
}
header('location:bookrecord.php')

?>