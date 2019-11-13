<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP</title>
</head>
<body>
	<table border='1' rules='cols'>
	 <tr> <?
	  $operators=['+','-','*','/'];
	  
	for ($i=1; $i<35; $i++){
	  	echo '<tr>';
  	for ($j=1; $j<=5; $j++){
  	
  	$operator=$operators[rand(0,3)];	
  	/*	echo '<td>'.$i.'*'.$j.'='.$i*$j.'</td>';*/
  	$num1 = rand(1,20);$num2 = rand(1,20);
  	if($operator=='/' and $num1%$num2!=0 or$operator=='-' and $num1-$num2!=0 or $operator=='*' and $num2*$num1>100 or $operator=='+' and $num2+$num1>100){
  		--$j;
  		continue;
  	}
  /*	else if($operator=='-' and $num1<$num2){
  		--$j;
  		continue;
  	}
  	else if($operator=='*' and $num2*$num1>100){
  		--$j;
  		continue;
  	}*/
  	echo "<td align='right'>$num1$operator$num2=_____</td>";// "<td>$i*$j" выводитсч на экран, поэтому в ковычках. .$i*$j.-не выводится на экран, поэтому без ковычек
  	}
  	echo '</tr>';
    }
	  ?>
	</table>
</body>
</html>
