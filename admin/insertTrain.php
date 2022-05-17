<?php
$servername = "localhost:3325";
$username = "root";
$password = "";
$dbname = "railway system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submitTrainDet'])){
    $trainName = $_POST['trainName'];
    $trainNumber = $_POST['trainNumber'];
    $trainSource = $_POST['trainSource'];
    $trainDestination = $_POST['trainDestination'];
    $arrivalTime = $_POST['arrivalTime'];
    $referenceDate = $_POST['referenceDate'];
    $departureTime = $_POST['departureTime'];
    $totalSeats = $_POST['totalSeats'];
    $amount=$_POST['amount'];
}

$sql = "INSERT INTO train (train_no, train_name, train_source, train_destination, arrival_time, departure_time, seats_available,reference_date,amount)
VALUES ('$trainNumber', '$trainName', '$trainSource', '$trainDestination', '$arrivalTime','$departureTime','$totalSeats','$referenceDate','$amount')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('New Train added successfully !');window.location.href='admin.php';</script>";
    sleep(1);
  } else {
    echo '<script>alert("Retry !")</script>';
  }
  $conn->close();

?>
