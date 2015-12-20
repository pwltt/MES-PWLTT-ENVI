<?php
//Dziedziczy z klasy ArrayAccess w pliku SPL.php
//Ścieszka do Core.php ../php/phpstubs/phpruntime/SPL.php
class ArrayToObject extends ArrayObject
{
   public function __get($key)
   {
      return $this[$key];
   }
   public function __set($key,$val)
   {
      $this[$key] = $val;
   }
} 
