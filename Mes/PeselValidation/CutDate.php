<?php

require_once '../../../TrainingOne/Mes/test1.php';

Class CutThisDate
{

	
	protected function DayCutter ($pesel)
	{
		$day = Mes_substr2($pesel,4,6);
		//echo $day;
		return $day;
	}	
		
	protected function MonthCutter ($pesel)
	{
		if (Mes_substr2($pesel, 2,3) %2==0 )
		{$month1=0;}
		else 
		{$month1=1;}
		
		$month2= Mes_substr2($pesel, 3,4);
		
		$month = $mounth1.$month2;
		//echo $month;
		return $month;
	}
	
	protected function YearCutter ($pesel)
	{
		$year2=Mes_substr2 ($pesel,0,2);
		
		
		$month1=Mes_substr2($pesel,2,3);
	
		if (($month1)%2==!0)
		{
		 $month1--;
		}
	
		switch ($month1)
		{
			case '0':
			$year1='19';
			break;
			case '2':
			$year1='20';	
			break;
			case '4':
			$year1='21';
			break;
			case '6':
			$year1='22';
			break;
			case '8':
			$year1='18';
			break;		
		}	
		$year=$year1.$year2;
		
		return $year;
	}
	
	
	function Cutter ($pesel)
		{
			return array('day'=>$this->DayCutter($pesel), 
						'mounth'=>$this->MonthCutter($pesel),
						'year'=>$this->YearCutter($pesel));
		}
		
	
		
	
	
	
	
	}

//echo Mes_substr2 ('92052904',4,6);

//$tata = new CutThisDate;

//var_dump($tata-> Cutter ('0132271321546'));




