<?php
   $insert=false;
   if(isset($_POST['name'])){

      //Set connection variables
$server="localhost:3307";
$username="root";
$password="";
//Create a database connection
$con=mysqli_connect($server,$username,$password);
//Check for connection success
   if(!$con){
       die("Connection to this database failed due to" . mysqli_connect_error());
   }
$
  $sql = "INSERT INTO `Railway System`.`payment` (`transaction_ID`, `passenger_ID`, `pnr_no`, `last_name`, `pincode`, `city`, `state`,`dob`,`gender`,`age`) VALUES ('$passenger_ID', '$first_name', '$middle_name', '$last_name', '$pincode', '$city', '$state','$dob','$gender','$age');";
//    echo $sql;
//Execute the query
  if($con->query($sql) == true){
   //   echo "Successfully inserted";
   //Flag for successful insertion
   $insert=true;
  }
  else{
      echo "ERROR:$sql <br> $con->error";
  }
  //Close the database connection
  $con->close();

   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <?php 
        if($insert==true){
        echo "<p class='confirmation-text'>Thanks for submitting the form.We hope to see you onboard with us on the US Trip.</p>";
    }
        ?>
    <div>
     <form action="sendData.php" method="post">
    <input type="text" name="first_name" id="first_name" placeholder="Enter your first name"><br>
     <input type="text" name="middle_name" id="middle_name" placeholder="Enter your middle name"><br>
     <input type="text" name="last_name" id="last_name" placeholder="Enter your last name"><br>
            <input type="text" name="age" id="age" placeholder="Enter your Age"><br>
            <input type="text" name="gender" id="gender" placeholder="Enter your gender"><br>
            <input type="date" name="dob" id="dob" placeholder="Enter your date of birth"><br>
            <input type="text" name="passenger_ID" id="passenger_ID" placeholder="Enter your passenger id"><br>
            <input type="text" name="pincode" id="pincode" placeholder="Enter your pincode"><br>
            <input type="text" name="city" id="city" placeholder="Enter your city"><br>
            <input type="text" name="state" id="state" placeholder="Enter your state"><br>
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter some other description"><br>

            </textarea>
     <button class="btn btn-outline-light btn-lg">Submit</button>
     </form>
     </div>
</body>
</html>