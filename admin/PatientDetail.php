<?php // LOOP TILL END OF DATA
include_once 'ConnectionEST.php';
$caller = new Connection();
$result = $caller->estConnection("SELECT * FROM patient ORDER BY PatientId DESC ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
<table class="table">
<thead class="table-dark">
   <tr>
       <th>Patient ID</th>
       <th>Timestamp</th>
       <th>Name</th>
       <th>Age</th>
       <th>Gender</th>
       <th>Address</th>
       <th>Contact</th>
       <th>Aadhar No.</th>
       <th>Doctor</th>
   </tr>
   
</thead>
<?php
while ($rows = $result->fetch_assoc()) {
    ?>
    
        <tr>
            <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
            <td><?php echo $rows['PatientID']; ?></td>
            <td><?php echo $rows['Time']; ?></td>
            <td><?php echo $rows['FirstName']; echo ' ';echo $rows['LastName']; ?></td>
            <td><?php echo $rows['Age']; ?></td>
            <td><?php echo $rows['Gender']; ?></td>
            <td><?php echo $rows['Address']; echo $rows['City']; echo ', ';echo $rows['State']; echo ', '; echo $rows['Zip'];?></td>
            <td><?php echo $rows['Contact']; ?></td>
            <td><?php echo $rows['Aadhar']; ?></td>
            <td><?php echo 'Dr. ';echo $rows['SeenBy']; ?></td>
        </tr>
    <?php
    }
    ?>
<tbody>
  
</tbody>
</table>

</body>
</html>