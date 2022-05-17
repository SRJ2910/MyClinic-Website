<?php // LOOP TILL END OF DATA
        include 'connect2server.php';
        $caller=new Connection();
        $result=$caller->estConnection("SELECT * FROM payment ORDER BY amount DESC ");
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<td><?php echo $rows['transaction_ID'];?></td>
				<td><?php echo $rows['passenger_ID'];?></td>
				<td><?php echo $rows['pnr_no'];?></td>
				<td><?php echo $rows['amount'];?></td>
			</tr>
			<?php
				}
			?>