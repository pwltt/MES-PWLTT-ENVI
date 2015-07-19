<?php

class DateValidator
{



 
 	private $tabDays = array(
 	'01'=>31,
 	'02'=>array('leap'=>29,'nonleap'=>28),
 	'03'=>31,
 	'04'=>30,
 	'05'=>31,
    '06'=>30,
    '07'=>31,
    '08'=>31,
    '09'=>30,
    '10'=>31,
    '11'=>30,
    '12'=>31);
 	 
 	
 
	 function CheckDay ($day, $month,$year)
	 {
	 	if ($day<1){return false;}
	 	
	 	else if($month==2 && $this->LeapYear($year))
	 	{return $day<=$this->tabDays[$month][leap];}
	 	else if ($month==2)
	 	{return $day<=$this->tabDays[$month][nonleap];}
	 	
	 	return $day<=$this->tabDays[$month];
	 		 	
	 }

	 function LeapYear ($year)
	 {
	 if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
	 	{return true;}
	 	else {return false;}
	 }

	 
	 function CheckMonth ($month)
	 {
	 	if($month>0 && $month<=12)
	 	{
	 		return true;
	 	}
	 	else {return false;}
	 }	
	 function Validator($day,$month,$year)
	 {
	 	
	 	
	 }	
	 
	 
	 	
}	 	
	 	
	 
$obiekt = new DateValidator();

var_dump ($obiekt->CheckDay('1','05','1992'));
	 
	 
	 
	 
