<!-- Fill in the missing punctuation to make sure the do/while loop in the editor executes correctly. -->
<head>
	<title>Completing the Loop</title>
</head>
<body>
<?php
	$loopCond = false;
	do
	{
		echo "<p>The loop ran even though the loop condition is false.</p>";
	}
	while ($loopCond);
	echo "<p>Now the loop is done running.</p>";
?>
</body>
</html>