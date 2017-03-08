<?php
/**
  * @Author     : Rufaida P
  * @Document   : print numbers up to 100 using recursion.
  * @Created on : Feb 21, 2017
*/


$num=1;
pr($num);

/**
  *pr() Recursive function,to print numbers 1 to 100
  *@param $num
*/
function pr($num)
 {
   if($num<=100)
       {
        echo $num."<br>";
        pr($num+1);

       }
   
  }

?>


