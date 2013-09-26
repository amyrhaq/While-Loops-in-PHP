<!-- Convert your while loop from the last exercise into endwhile syntax. -->
<html>
<head>
	<title>Using Endwhile</title>
</head>
<body>
<?php
$loopCond = true;
while ($loopCond): 
{
	echo "<p>The loop is running</p>";
	$loopCond = false;
}
	echo "<p>The loop has stopped</p>";
	endwhile;
?>
</body>
</html>