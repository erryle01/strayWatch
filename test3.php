<?php
$mysqli = new mysqli('localhost', 'root', '', 'stray_impact');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];

    $stmt = $mysqli->prepare('SELECT * FROM booking_record WHERE MONTH(date) = ? AND YEAR(date) = ?');
    if (!$stmt) {
        die("Prepare failed: " . $mysqli->error);
    }
    $stmt->bind_param('ii', $month, $year);
    $bookings = array();

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $bookings[] = array(
                    'title' => 'Booked',
                    'start' => $row['date'],
                    'backgroundColor' => '#f56954',
                    'borderColor' => '#f56954',
                    'allDay' => true
                );
            }
        }
        $stmt->close();
    }
    echo json_encode($bookings);
}
?>
