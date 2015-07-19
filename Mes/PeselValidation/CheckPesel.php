<?php


require_once '../../../TrainingOne/Mes/test1.php';


class CheckPesel
{
	


function test1 ($pesel)
{
$length = Mes_strlen ($pesel);	
if ($length != 11)
{return FALSE;}	
else {return true;}
}	
	
function CheckSum ($pesel)
	{
		$check_sum = 	$pesel[0] *1 +  
							$pesel[1]*3
							+$pesel[2]*7
							+$pesel[3]*9
							+$pesel[4]*1
							+$pesel[5]*3
							+$pesel[6]*7
							+$pesel[7]*9
							+$pesel[8]*1
							+$pesel[9]*3;
			
$rest_check_sum=$check_sum%10;

if ( $rest_check_sum==0)
{return $sum_check='0';}
else 
{return (string)$sum_check= 10-$rest_check_sum;}


		}
	
		
function CheckThisSum ($pesel)
	{
		$sum_check = $this->CheckSum($pesel);
		if ($sum_check == $pesel[10])
		{return true;}
		else 
		{return false;}	
	}


}
$obiekt = new CheckPesel();

var_dump ($obiekt->CheckThisSum('92052900834'));
