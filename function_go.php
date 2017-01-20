

<?php
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); 
include 'functions_zaqvki.php';

function go (){
		// свободни коли
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='free'){
			$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
			$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
			echo 'selected type free'.'</br>';
			echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
			load_free_cars();
		} 
		//заети коли
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars();
		}
		// заети коли по brand
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand();
		}
		// заети коли по модел
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model();
		}
		// заети коли по регистрационен номер
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired number'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_number();
		}
		// заети коли по мощност
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_power();
		}
		// заети коли по цвят
			if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_color();
		}
		// заети коли по brand и model
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand model'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_model();
		}
		// заети коли по brand и number
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand number'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_number();
		}
		// заети коли по brand и power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_power();
		}
		// заети коли по цвят и brand
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_color();
		}
		// заети коли по model и number
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model number'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model_number();
		}
		// заети коли по model и power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model_power();
		}
		// заети коли по цвят и model
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model_color();
		}
		// заети коли по number и power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired number power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_number_power();
		}
		// заети коли по цвят и номер
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired number color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_number_color();
		}
		// заети коли по цвят и power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired power color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_power_color();
		}
		// заети коли по brand, model, number
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model number'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_model_number();
		}
		// заети коли по brand, model, power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_model_power();
		}
		// заети коли по цвят и brand и model
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand model color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_model_color();
		}
		// заети коли по brand, number, power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand number power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_number_power();
		}
		// заети коли по brand, number, color
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand number color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_number_color();
		}
		// заети коли по brand, power, color
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand power color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_power_color();
		}
		// заети коли по model,number и power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model number power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model_number_power();
		}
		// заети коли по model,number и color
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model number color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model_number_color();
		}
		// заети коли по model,power и color
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']=='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model power color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model_power_color();
		}
		// заети коли по number,power и color
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']=='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired number power color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_number_power_color();
		}
		// заети коли по brand и model и number, power
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']=='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired brand model number power'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_model_number_power();
		}
		// заети коли по цвят и brand и model и number
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']!='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']=='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired make model number color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_brand_model_number_color();
		}
		// заети коли по model и number, power,color
		if($_POST['from_date']!='' && $_POST['to_date']!='' && $_POST['select_type']=='hired' &&
			$_POST['select_make']=='choose_make' && $_POST['select_model']!='choose_model' && $_POST['select_number']!='choose_number' &&
			$_POST['select_power']!='choose_power' && $_POST['select_color']!='choose_color'){
				$fdata = date_format(date_create($_POST['from_date']),"d.m.Y");
				$sdata = date_format(date_create($_POST['to_date']),"d.m.Y");
				echo 'selected type hired model number power color'.'</br>';
				echo 'selected data from'.' '.$fdata.' to '.$sdata.'</br>';
				load_hired_cars_model_number_power_color();
		}
		else {
			echo 'Please, select type!';
		}
}
		
		
		
?>
