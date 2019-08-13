

<?php

include_once'read_details.php';


?>




<!DOCTYPE html>
<html>
<head>
	<title>code</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main_container1">
	
	<form method="post" action="read_details.php">
		<div class="header">
	    		<h1>To Read Message Access The Code. </h1>
		</div>
		<input type="text" name="code" value=<?php echo $b; ?>> 

		<a href="index.php" class="button"><b>BACK</b></a>

