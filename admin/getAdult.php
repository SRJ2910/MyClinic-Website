<?php // LOOP TILL END OF DATA
include_once 'ConnectionEST.php';
$caller = new Connection();
$result = $caller->estConnection("SELECT * FROM passenger WHERE age>18 ");
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
       <th>Passenger ID</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Pincode</th>
       <th>City</th>
       <th>State</th>
       <th>Date of Birth</th>
       <th>Gender</th>
       <th>Age</th>
   </tr>
   
</thead>
<?php
while ($rows = $result->fetch_assoc()) {
    ?>
    
        <tr>
            <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
            <td><?php echo $rows['passenger_ID']; ?></td>
            <td><?php echo $rows['first_name']; ?></td>
            <td><?php echo $rows['last_name']; ?></td>
            <td><?php echo $rows['pincode']; ?></td>
            <td><?php echo $rows['city']; ?></td>
            <td><?php echo $rows['state']; ?></td>
            <td><?php echo $rows['dob']; ?></td>
            <td><?php echo $rows['gender']; ?></td>
            <td><?php echo $rows['age']; ?></td>
        </tr>
    <?php
    }
    ?>
<tbody>
  
</tbody>
</table>

</body>
</html>