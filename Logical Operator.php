<html>


<body>
    
<?php

echo "Logical Operators <br><br><br>";
  
//And Operator &&

$x = 10 ;
$y = 5 ;
$z = 5;

echo " AND operator <br>" ;
echo " if any one expression are false is return false <br>";
       //false     true
var_dump($x==$y && $y==$z); 

echo "<br><br><br>";

// OR Operator ||

$x = 10 ;
$y = 5 ;
$z = 5;

echo" OR operator <br>";

echo "if any one expression are true is return true  <br>";
       //false     true
var_dump($x==$y || $y==$z);

echo "<br><br><br>";

//XOR Operator 

$x = 10 ;
$y = 5 ;
$z = 5;

echo" XOR operator <br>";

echo "if any one expression are true is return true  <br>";
       //false     true
var_dump($x==$y XOR $y==$z);


echo"<br><br><br>";

// Not Operator !

$x = 10 ;
$y = 5 ;
$z = 5;

echo" Not operator <br>";

echo "if any one expression are true is return  False <br>";
       //false     true
var_dump( $z == $y);

?>
</body>
</html>