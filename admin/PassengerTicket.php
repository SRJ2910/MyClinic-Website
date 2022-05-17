<?php // LOOP TILL END OF DATA
include_once 'ConnectionEST.php';
$caller = new Connection();
$result = $caller->estConnection("SELECT * FROM train");
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
       <th>Train Number</th>
       <th>Train Name</th>
       <th>Source</th>
       <th>Destination</th>
       <th>Arraival Time</th>
       <th>Departure Time</th>
       <th>Seat Available</th>
   </tr>
   
</thead>
<?php
while ($rows = $result->fetch_assoc()) {
    ?>
    
        <tr>
            <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
            <td><?php echo $rows['train_no']; ?></td>
            <td><?php echo $rows['train_name']; ?></td>
            <td><?php echo $rows['train_source']; ?></td>
            <td><?php echo $rows['train_destination']; ?></td>
            <td><?php echo $rows['arrival_time']; ?></td>
            <td><?php echo $rows['departure_time']; ?></td>
            <td><?php echo $rows['seats_available']; ?></td>
        </tr>
    <?php
    }
    ?>
<tbody>
  
</tbody>
</table>

</body>
</html>



<!-- SELECT pnr_no,first_name,age,gender,train_name,arrival_time,departure_time,train_source,train_destination FROM passenger,ticket,train
where train.train_no = ticket.train_no; -->