<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"》
	<title>列表练习</title>
</head>
<body>
    <?php 
       $list=[
    'AAAAAA',
    'bbbbbb',
    'CCCCCC',
    'DDDDDD',
    'EEEEEE'
];
     ?>
     <ul>
     	<?php 
            foreach ($list as $k => $v) {
            	echo "<li>".$v."</li>";
            }
     	 ?>
     </ul>
</body>
</html>