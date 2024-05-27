<!-- <?php
// // Database configuration
// $host = 'localhost';
// $dbname = '';
// $username = 'root';
// $password = '';

// try {
//     // Create a new PDO instance
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
//     // Set the PDO error mode to exception
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     echo "Connected successfully";
// } catch (PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
// }
?> -->
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "stray_impact";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
