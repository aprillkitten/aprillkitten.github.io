
<section class="result_content">
<?php 


include 'function_go.php';

 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = ""; 
 $dbname = "rentcars";

 $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
	echo 'connected'.'</br>'; //
}


if(isset($_POST['bSearch'])){
	$first = $_POST['from_date'];
	$second = $_POST['to_date'];
	$type = $_POST['select_type'];
	$brand = $_POST['select_make'];
	$model = $_POST['select_model'];
	$number = $_POST['select_number'];
	$power = $_POST['select_power'];
	$color = $_POST['select_color'];
	global $first;
	global $second;
	global $type;
	global $brand;
	global $model;
	global $number;
	global $power;
	global $color;
	go ();
	mysqli_close($con);
}

?>

</section>
