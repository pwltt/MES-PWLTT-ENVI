<?php
function __autoload($class) //<--AUTO WCZYTANIE PLIKU O NAZWIE KLASY-->
{
   include_once("{$class}.php");
}


//require_once 'OOP2.php';
//require_once 'ArrayToObject.php';
//require_once 'users.php';

$op1 = new oop2('asdasd');
echo "<br>";
class SampleObject
      {
         public $var1;
         private $var2;
         protected $var3;
         static $var4;
         public function __construct()
         {
            $this->var1 = "Pierwsza wartość";
            $this->var2 = "Druga wartość";
            $this->var3 = "Trzecia wartość";
            SampleObject::$var4 = "Czwarta wartość";
            
         } 
       }
      $so = new SampleObject();
      $serializedso =serialize($so);
      $text = 'text.txt';
      //file_put_contents($text, $serializedso);
      print_r($serializedso);
      echo "<br>";
      print_r(unserialize($serializedso));
echo "<br>";

//sprawdzam czy obiekt op1 nalezy do klas, zarowno dziedziczącej jak i głównej 
if(is_a($op1, "oop"))
{
    echo "to tez jest obiekt klasy oop, poniewaz dziedziczy";
}
echo "<br>";
if (is_a($op1, "oop2")) 
    {
    echo "to jest obiekt klasy oop2";
    }
echo "<br>";
echo get_class($op1);


//uzycie klasy ArrayToObject ktora dziedziczy po ArrayObject. ArrayToObject.php
 $users = new ArrayToObject(
         array(
         "hasin"=>"hasin@pageflakes.com",
         "afif"=>"mayflower@phpxperts.net",
         "ayesha"=>"florence@pageflakes.net"
         ));
 
  $iterator = $users->getIterator();
      while ($iterator->valid())
      {
         echo "</br>{$iterator->key()} Adres e-mail to
            {$iterator->current()}\n";
            $iterator->next();
      }


echo "<br>";
echo $users->afif;
echo "<br>";

//uzycie klasy users która implementuje z intefacu ArrayAccess
$users1 = new users();
$users1['afif']="mayflower@phpxperts.net";
$users1['hasin']="hasin@pageflakes.com";
$users1['ayesha']="florence@phpxperts.net";
echo $users1['afif'].  "   lloooool";





?>