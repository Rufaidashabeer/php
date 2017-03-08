<?php

/**
  * @Author     : Rufaida P
  * @Document   : Delete duplicate elements from an array
  * @Created on : Feb 21, 2017
*/

?>

<html>
<head>
</head>
<body>
	<form method="post">
    Delete duplicate elements of an array<br>
		<input type="text" name="elements"/>
		<input type="submit" value="enter"></form>
</body>
</html>
 <?php 
	
	if($_POST)
	{
	  $elements=$_POST['elements'];
	  $array=explode(',', $elements);
	  $un=array_unique($array);
		
		foreach($un as $n)
          {
			echo $n."<br>";
			
		 }
  
   

  }
	
	
 
?>


