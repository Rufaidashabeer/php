<?php
/**
  * @Author     : Rufaida P
  * @Document   : converting to string,integer and boolean.
  * @Created on : Feb 21, 2017
*/
	
$a=12;
$b=35.99999;
$c="baabtra";
$d=TRUE;

//convert all variables to integer and print

echo "** Converting to integer<br><br>";

$inta=(int)$a;
$intb=(int)$b;
$intc=(int)$c;
$intd=(int)$d;

echo "before convertion<br>";
echo $a."<br>".$b."<br>".$c."<br>".$d;

echo "<br>after convertion<br>";
echo $inta."<br>".$intb."<br>".$intc."<br>".$intd;

//convert all variables to integer and print

echo "<br><br>** Converting to string<br><br>";

$stra=(string)$a;
$strb=(string)$b;
$strc=(string)$c;
$strd=(string)$d;

echo "before convertion<br>";
echo $a."<br>".$b."<br>".$c."<br>".$d;

echo "<br>after convertion<br>";
echo $stra."<br>".$strb."<br>".$strc."<br>".$strd;

//convert all variables to integer and print

echo "<br><br>** Converting to boolean<br><br>";

$ba=(boolean)$a;
$bb=(boolean)$b;
$bc=(boolean)$c;
$bd=(boolean)$d;

echo "before convertion<br>";
echo $a."<br>".$b."<br>".$c."<br>".$d;

echo "<br>after convertion<br>";
echo $ba."<br>".$bb."<br>".$bc."<br>".$bd;


?>
