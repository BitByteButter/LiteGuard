<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

	require "anti-ddos-lite/anti-ddos-lite.php";

	require('xwaf.php');
	$xWAF = new xWAF();
	$xWAF->start();
	 

	 ?>
<?php echo "Test";;echo $_GET['exploit']; ?>
</body>
</html>