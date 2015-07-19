<?php
class MesStringOperability extends GhostRiderStringOperability 

{
	
public function StringLength($text) 
{
	$wynik = '';
	for ($i = 0; isset($text[$i]); $i++) 
	{
		$wynik++;
	}
	return $wynik;
}




public function SubString($text, $count) {
	$wynik = '';
	for($i = 0; $i < $count; $i++) {
		$wynik .= $text[$i];
	}
	return $wynik;
}
	public function GetNick()
	{
	    return "Mes";
	}
}