<?php
$servername = "localhost:3325";
$username = "root";
$password = "";
$dbname = "railway_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    $no = $_POST['no'];
    $name = $_POST['name'];
    $source = $_POST['source'];
    $dest = $_POST['destination'];
    $arrival = $_POST['arrival'];
    $depart = $_POST['depart'];
    $seat = $_POST['seats'];
    
    echo $name;
}

$sql = "INSERT INTO train (train_no, train_name, train_source, train_destination, arrival_time, departure_time, seats_available)
VALUES ('$no', '$name', '$source', '$dest', '$arrival','$depart','$seat')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();

?>
