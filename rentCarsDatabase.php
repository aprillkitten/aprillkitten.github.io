<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/final_task_style.css">
		<meta charset="UTF-8">
	</head>
	<body> 
		<div class="outer">
			<header>
				<nav class="menu_header">
					<ul>
						<li><a href="#" class="active" target="_self">Home</a></li> 
						<li><a href="#" target="_self">About</a></li>
						<li><a href="#" target="_self">FAQ</a></li>
						<li><a href="#" target="_self">Contacts</a></li>
					</ul>
				</nav>
			</header>
			<?php  include 'final_task_phpbd.php'; ?>
			<aside class="search_content">
				<h1>Search car</h1>
				<article>
					<h5>About us</h5>
					<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, </p>
					<a href="#" target="_blank">more...</a>
				</article>
			<form action="#" method="Post">
					<input type="button" name="make" value="Make"/><span><input type="button" name="model" value="Model"/></span>
					<select name="select_make">
						<option label="Choose make" value="choose_make" name="choose_make" <?php if($_POST['select_make']== 'choose_make'){ echo 'selected'; } ?>></option>
						<option label="Audi" value="Audi" name="Audi" <?php if($_POST['select_make']== 'Audi'){ echo 'selected'; } ?>>Audi</option>
						<option label="Renault " value="Renault " name="Renault " <?php if($_POST['select_make']== 'Renault'){ echo 'selected'; } ?>>Renault </option>
						<option label="Opel" value="Opel" name="Opel" <?php if($_POST['select_make']== 'Opel'){ echo 'selected'; } ?>>Opel</option>
						<option label="Nissan" value="Nissan" name="Nissan" <?php if($_POST['select_make']== 'Nissan'){ echo 'selected'; } ?>>Nissan</option>
						<option label="Mazda" value="Mazda" name="Mazda" <?php if($_POST['select_make']== 'Mazda'){ echo 'selected'; } ?>>Mazda</option>
						<option label="Mitsubishi" value="Mitsubishi" name="Mitsubishi" <?php if($_POST['select_make']== 'Mitsubishi'){ echo 'selected'; } ?>>Mitsubishi</option>
						<option label="Mercedes-Benz" value="Mercedes-Benz" name="Mercedes_Benz" <?php if($_POST['select_make']== 'Mercedes-Benz'){ echo 'selected'; } ?>>Mercedes-Benz</option>
						<option label="Suzuki" value="Suzuki" name="Suzuki" <?php if($_POST['select_make']== 'Suzuki'){ echo 'selected'; } ?>>Suzuki</option>
						<option label="BMW" value="BMW" name="BMW" <?php if($_POST['select_make']== 'BMW'){ echo 'selected'; } ?>>BMW</option>
					</select><span>
					<select name="select_model">
						<option label="Choose model" value="choose_model" name="choose_model" <?php if($_POST['select_model']== 'select_model'){ echo 'selected'; } ?>></option>
						<option label="A4" value="A4" name="A4" <?php if($_POST['select_model']== 'A4'){ echo 'selected'; } ?>>A4</option>
						<option label="A6" value="A6" name="A6" <?php if($_POST['select_model']== 'A6'){ echo 'selected'; } ?>>A6</option>
						<option label="Clio" value="Clio" name="Clio" <?php if($_POST['select_model']== 'Clio'){ echo 'selected'; } ?>>3</option>
						<option label="Insignia" value="Insignia" name="Insignia" <?php if($_POST['select_model']== 'Insignia'){ echo 'selected'; } ?>>Insignia</option>
						<option label="Micra" value="Micra" name="Micra" <?php if($_POST['select_model']== 'Micra'){ echo 'selected'; } ?>>Micra</option>
						<option label="CX-5" value="CX_5" name="CX_5" <?php if($_POST['select_model']== 'CX_5'){ echo 'selected'; } ?>>CX-5</option>
						<option label="Pajero" value="Pajero" name="Pajero" <?php if($_POST['select_model']== 'Pajero'){ echo 'selected'; } ?>>Pajero</option>
						<option label="C-Class Sedan" value="C_Class_Sedan" name="C_Class_Sedan" <?php if($_POST['select_model']== 'C_Class_Sedan'){ echo 'selected'; } ?>>C-Class Sedan</option>
						<option label="Celerio" value="Celerio" name="Celerio" <?php if($_POST['select_model']== 'Celerio'){ echo 'selected'; } ?>>Celerio</option>
						<option label="M140i" value="M140i" name="M140i" <?php if($_POST['select_model']== 'M140i'){ echo 'selected'; } ?>>M140i</option>
					</select></span>
					<input type="button" name="regNumber" value="Registration Number"/><span><input type="button" name="power" value="Power"/></span>
					<select name="select_number">
						<option label="Choose number" value="choose_number" name="choose_number" <?php if($_POST['select_number']== 'choose_number'){ echo 'selected'; } ?>></option>
						<option label="Ab1234FR" value="Ab1234FR" name="Ab1234FR" <?php if($_POST['select_number']== 'Ab1234FR'){ echo 'selected'; } ?>>Ab1234FR</option>
						<option label="TX2345YT" value="TX2345YT" name="TX2345YT" <?php if($_POST['select_number']== 'TX2345YT'){ echo 'selected'; } ?>>TX2345YT</option>
						<option label="B3456RE" value="B3456RE" name="B3456RE" <?php if($_POST['select_number']== 'B3456RE'){ echo 'selected'; } ?>>B3456RE</option>
						<option label="AF4567GT" value="AF4567GT" name="AF4567GT" <?php if($_POST['select_number']== 'AF4567GT'){ echo 'selected'; } ?>>AF4567GT</option>
						<option label="B1212RR" value="B1212RR" name="B1212RR" <?php if($_POST['select_number']== 'B1212RR'){ echo 'selected'; } ?>>B1212RR</option>
						<option label="E5643DE" value="E5643DE" name="E5643DE" <?php if($_POST['select_number']== 'E5643DE'){ echo 'selected'; } ?>>E5643DE</option>
						<option label="ST7865E" value="ST7865E" name="ST7865E" <?php if($_POST['select_number']== 'ST7865E'){ echo 'selected'; } ?>>ST7865E</option>
						<option label="IS9789BN" value="IS9789BN" name="IS9789BN" <?php if($_POST['select_number']== 'IS9789BN'){ echo 'selected'; } ?>>IS9789BN</option>
						<option label="B5623A" value="B5623A" name="B5623A" <?php if($_POST['select_number']== 'B5623A'){ echo 'selected'; } ?>>B5623A</option>
						<option label="H6969BA" value="H6969BA" name="H6969BA" <?php if($_POST['select_number']== 'H6969BA'){ echo 'selected'; } ?>>H6969BA</option>
					</select><span>
					<select name="select_power">
						<option label="Choose power" value="choose_power" name="choose_power"  <?php if($_POST['select_power']== 'choose_power'){ echo 'selected'; } ?>></option>
						<option label="150" value="150" name="150" <?php if($_POST['select_power']== '150'){ echo 'selected'; } ?>>150</option>
						<option label="340" value="340" name="340" <?php if($_POST['select_power']== '340'){ echo 'selected'; } ?>>340</option>
					</select></span>
					<input type="button" name="color" value="Color"/><span><input type="button" name="type" value="Type"/></span>
						<select name="select_color">
							<option label="Choose color" value="choose_color" name="choose_color"  <?php if($_POST['select_color']== 'choose_color'){ echo 'selected'; } ?>></option>
							<option label="Grey" value="Grey" name="Grey" <?php if($_POST['select_color']== 'Grey'){ echo 'selected'; } ?>>Grey</option>
							<option label="Red" value="Red" name="Red" <?php if($_POST['select_color']== 'Red'){ echo 'selected'; } ?>>Red</option>
							<option label="Silver" value="Silver" name="Silver" <?php if($_POST['select_color']== 'Silver'){ echo 'selected'; } ?>>Silver</option>
							<option label="White" value="White" name="White" <?php if($_POST['select_color']== 'White'){ echo 'selected'; } ?>>White</option>
							<option label="Black" value="Black" name="Black" <?php if($_POST['select_color']== 'Black'){ echo 'selected'; } ?>>Black</option>
							<option label="Blue" value="Blue" name="Blue" <?php if($_POST['select_color']== 'Blue'){ echo 'selected'; } ?>>Blue</option>
						</select><span>
						<select name="select_type"/>
							<option label="Choose type" value="choose_type" name="choose_type" <?php if($_POST['select_type']== 'choose_type'){ echo 'selected'; } ?>></option>
							<option label="free" value="free" name="free" <?php if($_POST['select_type']== 'free'){ echo 'selected'; } ?>>free</option>
							<option label="hired" value="hired" name="hired" <?php if($_POST['select_type']== 'hired'){ echo 'selected'; } ?>>hired</option>
						</select></span>
					<input type="button" name="from" value="From"/><span><input type="button" name="to" value="To"/></span>
					<input type="date" name="from_date" value="<?php if($_POST['from_date']!=''){ echo $_POST['from_date']; } ?>" min="2014-01-01" max="2018-12-31" required/><span>
					<img src="../images/date.gif" alt="img_date"/>
					<input type="date" name="to_date" value="<?php if($_POST['to_date']!=''){ echo $_POST['to_date']; } ?>" id="to_date" max="2018-12-31" required/><img src="../images/date.gif" alt="img_date" id="img_to_date"/></span>
					<input type="submit" name="bSearch" value="Search"/>
				</form>
			</aside>
			<footer class="outer">
				<p>All right reserved solutions.</p>
			</footer>
		</div>
	</body>
</html>

