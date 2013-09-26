<!-- Make sure the while loop in the editor runs as long as $loopCond is true, and echo "The loop is running." below the comment in the loop. -->
<html>
<head>
	<title>While Loop Syntax</title>
</head>
<body>
	<?php
		$loopCond = true;
		while ($loopCond)
		{
		//echo your message that the loop is running below
			echo "<p>The loop is running.</p>";
				$loopCond = false;
		}
			echo "<p>And now its done.</p>";
	?>
</body>
</html>