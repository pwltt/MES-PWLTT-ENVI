<?php

//set_include_path('/Users/Admin/Desktop/training/Eagles/TrainingOne/pwltt');
 
//require_once '../../../TrainingOne/pwltt/test1.php';
require_once 'substr.php';

class IsStringInString 
{	
	protected function PrepereString($subject1,$seek1)
	{
		return array($subject1,
		             $seek1);
	}
	protected function ConvertSubject($array)
	{
		$first = $array[0];
		$second = $array[1];

		for($i = 0; $i < pwltt_str($first);$i++)
			{
			if(pwltt_substr2($first,$i,pwltt_str($second)) == $second)
					{
						return true;
					}
			}
		return false;
	}
	public function  IsStringInStringF($subject1,$seek1)
	{
		return $this -> ConvertSubject($this -> PrepereString($subject1,$seek1));
	}
}
$string = new IsStringInString;
var_dump($string -> IsStringInStringF('rafal','al'));