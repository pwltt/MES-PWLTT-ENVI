<?php
	function pwltt_str($text)
	{
		$count = 0;
		for($i = 0; isset($text[$i]); $i++)
			$count++;
		
		return $count;
	}
	
	function pwltt_substr($text,$count)
	{
	    $wynik = '';
		for( $i = 0; $i <=$count; $i++)
		{
			$wynik .= $text[$i];
		}
		return $wynik;
	}

	function pwltt_substr2($text,$od,$do)
	{
		$wynik = '';
		for( $od; $od <$do; $od++)
		{
			$wynik .= $text[$od];
		}
		return $wynik;
	}
	
	?>
