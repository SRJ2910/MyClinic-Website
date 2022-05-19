<?php // LOOP TILL END OF DATA
include_once 'ConnectionEST.php';
$caller1 = new Connection();
$result = $caller1->estConnection("SELECT
(SELECT COUNT(*) FROM patient WHERE Age<18) as children,
(SELECT COUNT(*) FROM patient WHERE Age<18 AND Gender = 'Male') as Mchildren,
(SELECT COUNT(*) FROM patient WHERE Age<18 AND Gender = 'Female') as Fchildren,
(SELECT COUNT(*) FROM patient WHERE Age<18 AND Gender = 'Other') as Ochildren,
(SELECT COUNT(*) FROM patient WHERE Age>17) as adult,
(SELECT COUNT(*) FROM patient WHERE Age>17 AND Gender = 'Male') as Madult,
(SELECT COUNT(*) FROM patient WHERE Age>17 AND Gender = 'Female') as Fadult,
(SELECT COUNT(*) FROM patient WHERE Age>17 AND Gender = 'Other') as Oadult,
COUNT(*) as total,
(SELECT COUNT(*) FROM patient WHERE Gender = 'Male') as Mtotal,
(SELECT COUNT(*) FROM patient WHERE Gender = 'Female') as Ftotal,
(SELECT COUNT(*) FROM patient WHERE Gender = 'Other') as Ototal
FROM patient;");
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
       <th>Children ( Male | Female | Others )</th>
       <th>Adult ( Male | Female | Others )</th>
       <th>Total ( Male | Female | Others )</th>
   </tr>
   
</thead>
<?php
while ($rows = $result->fetch_assoc()) {
    ?>
    
        <tr>
            <!--FETCHING DATA FROM EACH ROW OF EVERY COLUMN-->
            <td>
                <?php 
                    echo $rows['children'];
                    echo ' ( ';
                    echo $rows['Mchildren'];
                    echo ' | ';
                    echo $rows['Fchildren'] ; 
                    echo ' | ';
                    echo $rows['Ochildren'] ;
                    echo ') ';
                ?>
            </td>

            <td>
                <?php 
                    echo $rows['adult'];
                    echo ' ( ';
                    echo $rows['Madult'];
                    echo ' | ';
                    echo $rows['Fadult'] ; 
                    echo ' | ';
                    echo $rows['Oadult'] ;
                    echo ') ';
                ?>
            </td>

            <td>
                <?php 
                    echo $rows['total'];
                    echo ' ( ';
                    echo $rows['Mtotal'];
                    echo ' | ';
                    echo $rows['Ftotal'] ; 
                    echo ' | ';
                    echo $rows['Ototal'] ;
                    echo ') ';
                ?>
            </td>

            </tr>
    <?php
    }
    ?>
<tbody>
  
</tbody>
</table>

</body>
</html>