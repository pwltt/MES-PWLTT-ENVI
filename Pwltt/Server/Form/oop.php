<?php
require 'IoOP.php';
abstract class oop  implements IoOP
{   
    function suma($liczba1,$liczba2){  
        $wynik = $liczba1 + $liczba2;
        return $wynik; 
    }
    function roznica($liczba1,$liczba2){
        $wynik = $liczba1 - $liczba2;
        return $wynik;   
    }
    function iloczyn($liczba1,$liczba2){
        $wynik = $liczba1 * $liczba2;
        return $wynik;    
    }
    
    function iloraz($liczba1,$liczba2){ 
        $wynik = $liczba1 / $liczba2;
        return $wynik;
    }
    function oblicz($znak,$liczba1,$liczba2){
        switch ($znak)
        {
            case "+":
             echo "Wynik działania  ".$liczba1." " .$znak. " ".$liczba2." = ", self::suma($liczba1, $liczba2)."<br>"; 
                break;
            case "-":
             echo "Wynik działania  ".$liczba1." " .$znak. " ".$liczba2." = ", self::roznica($liczba1, $liczba2)."<br>"; 
                break;
            case "*":
             echo "Wynik działania  ".$liczba1." " .$znak. " ".$liczba2." = ", self::iloczyn($liczba1, $liczba2)."<br>"; 
                break;
            case "/":
             echo "Wynik działania  ".$liczba1." " .$znak. " ".$liczba2." = ", self::iloraz($liczba1, $liczba2)."<br>"; 
                break; 
        }     
    }
}

