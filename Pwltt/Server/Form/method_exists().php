<?php

 function __autoload($class) //<--AUTO WCZYTANIE PLIKU O NAZWIE KLASY-->
      {
         include_once("{$class}.php");
      }
    

//Omijanie tworzenia obiektu gdy metoda Pobierz dane jest statyczna
oop2::PobierzDane("*", 4, 3);
echo "<br>";
    //Tworzenie obiektu klasyy oop2 mimo, ze funkcja jest statyczna i nie trzeba 
    $ob1 = new oop2("Cooooo jest"); //<-- _construct doda ten string do pola 'napis'
    echo $s->napis;
echo "<br>";
//sprawdzam czy klasa 'oop2' istnieje
if (class_exists("oop2") == true) //wynik true
{
    
        //sprawdzam czy w klasie obiektu ob1 istnieje motoda 'PobierzDane
        var_dump(method_exists($ob1, 'PobierzDane')); //true
    
    
        //Inny rodzaj sprawdzenia czy metoda istnieje
        if(method_exists($ob1,'suma') == TRUE)
        {
            echo "<br>"."tak"."<br>"; //<<-- right answer dla tego warunku
        }
        else 
        {
            echo "nie";
        }
}
echo $ob1->napis;


//Omijanie tworzenia obiektu gdy metoda oblicz jest statyczna
//oop::oblicz("+", 5, 6);
//
//
//oop::oblicz("*", 5, 6);
