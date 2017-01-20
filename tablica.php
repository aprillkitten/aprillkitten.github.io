<?php 
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); 
	echo '<table border="1" cellspacing="0">
			<tr>
				<th>Brand</th>
				<th>Model</th>
				<th>Reg. Number</th>
				<th>Power</th>
				<th>Color</th>
				<th>Client</th>
			</tr>';
	while($row = mysqli_fetch_array($res)){
		printf ('<tr><td>'.$row['brand']. '</td>
					<td>'.$row['model']. '</td>
					<td>'.$row['reg_num']. '</td>
					<td>'.$row['horse_powers']. '</td>
					<td>'.$row['color']. '</td>
					<td>'.$row['client']. '</td><tr>');
				} echo '</table>';

?>
