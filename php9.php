<?php

/**
  * @Author     : Rufaida P
  * @Document   : using switch-case
  * @Created on : Feb 21, 2017
*/

?>

<html>
<form method="post" action="">

 choices<br>
 "6b"<br>
 "6bz"<br>
 "6"<br>
 6 <br>
 enter your choice: 
<br><input type="text" name="choice"><br>

<input type="submit" value="enter">

 </form>
</html>
<?php

if($_POST)
   {
    $choice=$_POST['choice'];
    switch($choice)
      {
        case "\"6b\"": print"I'm 6 b";
                       break;
        case "\"6bz\"":print"I'm 6az";
                       break;
        case "\"6\"":print"I'm integer 6";
                     break;
        case '6':print"integer 6";
               break;
         default:print"I'm no where";
                 break;
      }
    }
     


?>
