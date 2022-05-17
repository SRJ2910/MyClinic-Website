<?php
$servername = "localhost:3325";
$username = "root";
$password = "";
$dbname = "clinic register";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$time=rand(1000000000,1999999999);
// date_default_timezone_set('Asia/Kolkata');

// $dateYmd = date('Y-m-d');
// echo "Current Year Month Day: $dateYmd";
// echo $_COOKIE['train_number'];
// echo $_COOKIE['amount'];

if(isset($_POST['SubmitButton'])){
    $seen_by=$_POST['drName'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $contact=$_POST['contact'];
    $Aadhar=$_POST['aadhar'];
    $Address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
}

// $sql1 = "INSERT INTO payment (transaction_ID, passenger_ID, pnr_no, amount)
// VALUES ('$transaction_ID', '$passenger_ID', '$pnr_no', '$amount')";

$sql = "INSERT INTO patient (SeenBy, FirstName, LastName, Age, Gender, Contact, Aadhar, Address, Zip, City , State)
VALUES ('$seen_by', '$first_name', '$last_name', '$age', '$gender','$contact', '$Aadhar', '$Address', '$pincode', '$city','$state')";

// $sql3 = "INSERT INTO ticket (pnr_no, train_no, passenger_ID)
// VALUES ( '$pnr_no', '$train_no', '$passenger_ID')";

// $sql4 = "INSERT INTO traveller (passenger_ID,passenger_bookingDate,train_no)
// VALUES ('$passenger_ID','$passenger_bookingDate','$train_no')";

// $sql5 = "UPDATE train SET  seats_available=seats_available-1 WHERE train_no='$train_no' AND seats_available>0;";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Patient added successfully !!!');window.location.href='../registration.php';</script>";
  } else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Try After Sometime";
  }

  $conn->close();
?>

