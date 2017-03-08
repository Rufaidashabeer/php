<?php

/**
  * @Author     : Rufaida P
  * @Document   : fibonacci series up to a limit
  * @Created on : Feb 21, 2017
*/

?>

<html>
 <form method="post" action="">
   enter the limit:<input type="text" name="li">
   <input type="submit" value="enter">
</form>
</html>

<?php
if($_POST)
{
$limit=$_POST['li'];
echo "limit=".$limit;

$a = 0;
$b = 1;

echo "<br>Fibonacci Series:";

   
        // Prints the first two terms.
        if($limit>=1)
        { 
            echo "<br>".$a."<br>";
             if($limit>=2)
            {
               echo $b."<br>";
                 if($limit>=3)
                    {
                      for ($i=3;$i<=$limit;$i++)
                       {
                         $c=$a+$b;
                          echo $c."<br>";
                             $a=$b;
                            $b=$c;
                       }
                    }
            }
       }
}
?>
