<?php
session_start();
$_SESSION['sesja'] = 'jakas';
$_SESSION['sesja2'] = 'jakas2';

	echo 'GET: </br>';
	var_dump($_GET);
	
	echo '</br> POST: </br>';
	var_dump($_POST);
	
	echo '</br> REQUEST: </br>';
	var_dump($_REQUEST);
	
	echo '</br> SESSION </br>';
	var_dump($_SESSION);
	
// 	echo '</br> SERVER </br>';
// 	var_dump($_SERVER);
	
	echo date('l jS F Y h:i:s A');

	if(!isset($_POST['data']))
	{
		$_POST['data']=1;
	}
	echo '<form action="index.php" method="post">'; 
	
		for($i = 0; $i < (int)$_POST['data'];$i++)
		{
			echo '<input type="text" name="data" value="Podaj cos"/>';
		}
				
		echo '<input type="submit" name="Check" value="zabij za gre"/>;
	
	</form>';
		var_dump($_SERVER["SERVER_SOFTWARE"]);
?>
<html>
<head>




</head>


</html>
<dir>
chuj

</dir>