
<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); 

	function load_free_cars(){ //извеждане на свободни коли
		global $con;
		global $first;
		global $second;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color 
			 FROM `cars` JOIN `clients_cars`
			 ON cars.id=clients_cars.cars_id
			 WHERE (`rent_date` < '$first' AND `return_date` < '$first') 
			 OR (`rent_date` > '$second' AND `return_date` > '$second')
			 OR (clients_id IS NULL)
			 GROUP BY `cars_id`");
		echo '<table border="1" cellspacing="0">
				<tr>
					<th>Brand</th>
					<th>Model</th>
					<th>Reg. Number</th>
					<th>Power</th>
					<th>Color</th>
				</tr>';
		while($row = mysqli_fetch_array($res)){
			printf ('<tr><td>'.$row['brand']. '</td>
						 <td>'.$row['model']. '</td>
						 <td>'.$row['reg_num']. '</td>
						 <td>'.$row['horse_powers']. '</td>
						 <td>'.$row['color']. '</td><tr>');
					} echo '</table>';
}

	function load_hired_cars(){ //извеждане на заети коли
			global $con;
			global $first;
			global $second;
			mysqli_select_db($con, "rentcars");
			$res= mysqli_query($con,
				"SELECT brand, model, reg_num, horse_powers, color 
				 FROM `cars` JOIN `clients_cars`
				 ON cars.id=clients_cars.cars_id
				 WHERE ((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second'))
				 GROUP BY `cars_id`");
			echo '<table border="1" cellspacing="0">
					<tr>
						<th>Brand</th>
						<th>Model</th>
						<th>Reg. Number</th>
						<th>Power</th>
						<th>Color</th>
					</tr>';
			while($row = mysqli_fetch_array($res)){
				printf ('<tr><td>'.$row['brand']. '</td>
							 <td>'.$row['model']. '</td>
							 <td>'.$row['reg_num']. '</td>
							 <td>'.$row['horse_powers']. '</td>
							 <td>'.$row['color']. '</td><tr>');
						} echo '</table>';
	}



	function load_hired_cars_brand(){ //извеждане на заети коли по brand
		global $con;
		global $first;
		global $second;
		global $brand;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				FROM `clients_cars` 
				INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				AND `brand` = '$brand'
				ORDER BY `clients_id` ASC");
		include 'tablica.php'; 
	}
	
	function load_hired_cars_model(){ //извеждане на заети коли по модел
		global $con;
		global $first;
		global $second;
		global $model;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
			 FROM `clients_cars` 
			 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
			 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
			 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
			 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
			 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
			 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
			 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
			 AND `model` = '$model'
			 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_number(){ //извеждане на заети коли по рег. номер
		global $con;
		global $first;
		global $second;
		global $number;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				FROM `clients_cars` 
				INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				AND `number` = '$number'
				ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_power(){ //извеждане на заети коли по мощност
		global $con;
		global $first;
		global $second;
		global $power;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_color(){ //извеждане на заети коли по цвят
		global $con;
		global $first;
		global $second;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	
	
	function load_hired_cars_brand_model(){ //извеждане на заети коли по brand и model
		global $con;
		global $first;
		global $second;
		global $brand;
		global $model;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `model` = '$model'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_brand_number(){ //извеждане на заети коли по brand и number
		global $con;
		global $first;
		global $second;
		global $brand;
		global $number;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `number` = '$number'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_brand_power(){ //извеждане на заети коли по brand и power
		global $con;
		global $first;
		global $second;
		global $brand;
		global $power;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_brand_color(){ //извеждане на заети коли по brand и цвят
		global $con;
		global $first;
		global $second;
		global $brand;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	
	function load_hired_cars_model_number(){ //извеждане на заети коли по model и number
		global $con;
		global $first;
		global $second;
		global $model;
		global $number;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `model` = '$model'
				 AND `number` = '$number'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_model_power(){ //извеждане на заети коли по model и power
		global $con;
		global $first;
		global $second;
		global $model;
		global $power;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `model` = '$model'
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_model_color(){ //извеждане на заети коли по model и цвят
		global $con;
		global $first;
		global $second;
		global $model;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `model` = '$model'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_number_power(){ //извеждане на заети коли по number и power
		global $con;
		global $first;
		global $second;
		global $number;
		global $power;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `number` = '$number'
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_number_color(){ //извеждане на заети коли по number и цвят
		global $con;
		global $first;
		global $second;
		global $number;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `number` = '$number'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_power_color(){ //извеждане на заети коли по power и цвят
		global $con;
		global $first;
		global $second;
		global $power;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `power` = '$power'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	
	function load_hired_cars_brand_model_number(){ //извеждане на заети коли по brand, model, number
		global $con;
		global $first;
		global $second;
		global $brand;
		global $model;
		global $number;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `model` = '$model'
				 AND `number` = '$number'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_brand_model_power(){ //извеждане на заети коли по brand, model, power
		global $con;
		global $first;
		global $second;
		global $brand;
		global $model;
		global $power;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `model` = '$model'
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_brand_model_color(){ //извеждане на заети коли по brand и model, color
			global $con;
			global $first;
			global $second;
			global $brand;
			global $model;
			global $color;
			mysqli_select_db($con, "rentcars");
			$res= mysqli_query($con,
				"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `model` = '$model'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	function load_hired_cars_brand_number_power(){ //извеждане на заети коли по brand и number, power
		global $con;
		global $first;
		global $second;
		global $brand;
		global $number;
		global $power;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `number` = '$number'
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	function load_hired_cars_brand_number_color(){ //извеждане на заети коли по brand и number, color
		global $con;
		global $first;
		global $second;
		global $brand;
		global $number;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `number` = '$number'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	function load_hired_cars_brand_power_color(){ //извеждане на заети коли по brand и power, color
		global $con;
		global $first;
		global $second;
		global $brand;
		global $power;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `power` = '$power'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	
	function load_hired_cars_model_number_power(){ //извеждане на заети коли по model,number и power
		global $con;
		global $first;
		global $second;
		global $model;
		global $number;
		global $power;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `model` = '$model'
				 AND `number` = '$number'
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	function load_hired_cars_model_number_color(){ //извеждане на заети коли по model,number и color
		global $con;
		global $first;
		global $second;
		global $model;
		global $number;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `model` = '$model'
				 AND `number` = '$number'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	function load_hired_cars_model_power_color(){ //извеждане на заети коли по model,power и color
		global $con;
		global $first;
		global $second;
		global $model;
		global $power;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `model` = '$model'
				 AND `power` = '$power'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	function load_hired_cars_number_power_color(){ //извеждане на заети коли по number,power и color
		global $con;
		global $first;
		global $second;
		global $number;
		global $power;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `number` = '$number'
				 AND `power` = '$power'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	
	
		
	function load_hired_cars_brand_model_number_power(){ //извеждане на заети коли по brand и model,number, power
			global $con;
			global $first;
			global $second;
			global $brand;
			global $model;
			global $number;
			global $power;
			mysqli_select_db($con, "rentcars");
			$res= mysqli_query($con,
				"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `model` = '$model'
				 AND `number` = '$number'
				 AND `power` = '$power'
				 ORDER BY `clients_id` ASC");
			include 'tablica.php';
	}
	
	function load_hired_cars_brand_model_number_color(){ //извеждане на заети коли по brand и model,number, color
		global $con;
		global $first;
		global $second;
		global $brand;
		global $model;
		global $number;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `brand` = '$brand'
				 AND `model` = '$model'
				 AND `number` = '$number'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	function load_hired_cars_model_number_power_color(){ //извеждане на заети коли по model и number, power,color
		global $con;
		global $first;
		global $second;
		global $model;
		global $number;
		global $power;
		global $color;
		mysqli_select_db($con, "rentcars");
		$res= mysqli_query($con,
			"SELECT brand, model, reg_num, horse_powers, color, CONCAT(first_name,' ',last_name) AS client 
				 FROM `clients_cars` 
				 INNER JOIN `cars` ON clients_cars.cars_id=cars.id
				 INNER JOIN `clients` ON clients_cars.clients_id=clients.id
				 WHERE (((`rent_date` > '$first' AND `return_date` < '$second') 
				 OR (`rent_date` = '$first' AND `return_date` = '$second')) 
				 OR ((`rent_date` < '$first' AND `return_date` > '$first' AND `return_date` < '$second'))
				 OR ((`rent_date` < '$second' AND `rent_date` > '$first' AND `return_date` > '$second'))
				 OR ((`rent_date` < '$first' AND `return_date` > '$second')))
				 AND `model` = '$model'
				 AND `number` = '$number'
				 AND `power` = '$power'
				 AND `color` = '$color'
				 ORDER BY `clients_id` ASC");
		include 'tablica.php';
	}
	
	
	
	
	
	
	
	
	
	

?>
