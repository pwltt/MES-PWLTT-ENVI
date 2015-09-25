<?php
require 'OOP.php';

class oop2 extends oop
{
    static function PobierzDane($raf1,$raf2,$raf3)
    {
        self::oblicz($raf1, $raf2, $raf3);
    }
    
}
//<-- Tworzenie obiektu klasy 'oop2' 
//$ob1 = new oop2();
//$ob1 ->PobierzDane("+", 4, 4); 
//
//$ob1 ->PobierzDane("-", 4, 4); 
//
//$ob1 ->PobierzDane("*", 4, 4);


$ob1 = oop2::PobierzDane("*", 4, 3);


//Omijanie tworzenia obiektu gdy metoda oblicz jest statyczna
//$ob1 = oop::oblicz("+", 5, 6);
//
//
//$ob1 = oop::oblicz("*", 5, 6);