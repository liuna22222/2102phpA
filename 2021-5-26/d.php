<?php
	$c="./adc";
	$b=file_get_contents($c);
	echo $b;
	$a=$b+1;
	file_put_contents($c,$a);