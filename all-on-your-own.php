<!-- Create a do/while loop below -->
<html>
<head>
	<title>All On Your Own!</title>
</head>
<body>
<?php 
	$loopCond = false;
	do
	{
		echo "<p>this runs even though its false</p>";
	}
	while ($loopCond);
	echo "<p>this loop has finished</p>";
 ?>
</body>
</html>