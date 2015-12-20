<?php
function __autoload($class) //<--AUTO WCZYTANIE PLIKU O NAZWIE KLASY-->
{
   include_once("{$class}.php");
}


$rafal = new oop2();