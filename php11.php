<?php

/**
  * @Author     : Rufaida P
  * @Document   : Largest element of an array
  * @Created on : Feb 21, 2017
*/

?>


<html>
<head>
</head>
<body>
	<form method="post">
    Largest element of an array<br>
    enter array elements(seperate by ',')<br>
		<input type="text" name="elements"/><br>
		<input type="submit" value="enter"></form>
</body>
</html>
 <?php 
	
	if($_POST)
	{
	  $elements=$_POST['elements'];
	  $array=explode(',', $elements);
		
		$largest=$array[0];
		
		foreach($array as $n)
          {
			if($n>$largest)
            {
			$largest = $n;
			}
			
		 }
  
     echo "Largest Number is: $largest <br />";

  }
	
	
 
?>


