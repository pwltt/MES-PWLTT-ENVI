<?php
require 'oop.php';

class oop2 extends oop
{
    static function PobierzDane($raf1,$raf2,$raf3)
    {
        //Uzycie statyczne metody oblicz z klasy oop
        self::oblicz($raf1, $raf2, $raf3);
        
    }
   
}
