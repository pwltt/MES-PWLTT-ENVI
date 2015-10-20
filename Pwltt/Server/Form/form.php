<?php
function __autoload($class) //<--AUTO WCZYTANIE PLIKU O NAZWIE KLASY-->
{
   include_once("{$class}.php");
}
?>
    <form action="form.php" method="post">
      num1: <input type="text" name="num1" placeholder='123'><br>
      num2: <input type="text" name="num2"><br>
      +<input type ="checkbox" name="+" value="+"><br>
      
      <input type="submit" value="Submit">
    </form>
<?php
if(isset($POST['num1']) || isset($_POST['num2']))
{
    if(is_numeric($_POST['num1']))
    $zmienna = $_POST['num1'];
    else echo 'llloooool, to nie liczba';
    
    $zmiennaa = $_POST['num2'];
        if(isset($_POST['+']))
            $znak = $_POST['+'];
        else 
            $znak ="+";
}
else 
{
    $zmienna = $_POST['num1'] = 0;
    $zmiennaa = $_POST['num2'] = 0;
    
}
$suma = new oop2();

echo $suma->oblicz($znak,$zmienna,$zmiennaa);



