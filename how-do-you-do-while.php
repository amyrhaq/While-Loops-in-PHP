<!-- Inspect the code here to see if you understand how a do-while works.  -->
<html>
<head>
	<link rel="stylesheet" type="text/css" href="looping-the-loop.css">
	<title>How Do You Do While</title>
</head>
<body>
<p>We will keep flipping a coin as long as the results is heads!</p>
<?php
$flipCount = 0;
do {
	$flip = rand(0,1);
	$flipCount ++;
	if ($flip)
	{
		echo "<div class='coin'>H</div>";
	}
	else 
	{
		echo "<div class='coin'>T</div>";
	}
} while ($flip);
$verb = "were";
$last = "flips";
if ($flipCount == 1)
{
	$verb = "was";
	$last = "flip";
}
echo "<p>There {$verb} {$flipCount} {$last}!</p>";
?>
</body>
</html>