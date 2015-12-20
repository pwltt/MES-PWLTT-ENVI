<script>
function myFunction(val,val2) {

	<input type="text" name="email" placeholder= val.'.'.val2.'@gmail.com/>
		
}
</script>
<?php
		
		if(!isset($_POST['data']))
		{
			$_POST['data']=1;
		}
		if(!isset( $_POST['data1'] ) && !isset( $POST['data2']))
		{
			$_POST['data1']=0;
			$_POST['data2']=0;
			
		}
		echo '<form action="form1.php" method="post">
			 <input type="text" name="data1" placeholder="Wpisz liczbe"/>
			 <input type="text" name="data2" placeholder="Wpisz liczbe"/>';
		
		echo '<input type="submit" name="Check" value="Suma"/>';
		$zmienna1=(int)$_POST['data1'];
		$zmienna2=(int)$_POST['data2'];
		
		echo "Wynik = ". $zmienna3 = $zmienna1 + $zmienna2 ."</br>";
		
		
		if(!isset( $_POST['name'] ) && !isset( $POST['surname']))
		{
			$_POST['name']="Imie";
			$_POST['surname']="Nazwisko";
		}
		
		
		echo '<input type="text" onchange="name" name="name" placeholder="Imie"/>
			 <input type="text" name="surname" placeholder="Nazwisko"/>';

		echo '<input type="text" name="email" placeholder='.$_POST['name'].'.'.$_POST['surname'].'@gmail.com />';
		echo '</form>';
		
		
		
		
		
		/*for($i = 0; $i < (int)$_POST['data'];$i++)
		 {
		 echo '<input type="text" name="data" value="Podaj cos"/>';
		 }*/
		
		
		
	
?>