<?php
if(isset($_GET['date'])){
    $date = $_GET['date'];
}

if(isset($_POST['submit'])){
    $fName = $_POST['firstName'];
    $mName = $_POST['middleName'];
    $lName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $conn = new mysqli('localhost', 'root','','stray_impact');

    $sql = "INSERT INTO booking_record(firstName,middleName,lastName,phone,email,date)VALUES('$fName','$mName','$lName','$phone','$email','$date')";
    if($conn->query($sql)){
    }else{
        
}}

?>
<?php include("include/header.php");?>
<body>
    <div class="container">
        <h1 class="text-center alert alert-danger" style="background-color: #2ecc71; border:none;color:#fff">Book for Date:<?php echo date('m/d/Y', strtotime($date));?></h1>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="">Firt Name</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control" name="middleName" required>
                    </div>
                    <div class="form-group">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="text" class="form-control" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">submit</button>
                    <a href="test1.php" class="btn btn-success">back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>