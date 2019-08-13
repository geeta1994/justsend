<?php 
	include_once'post_details.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">

	<form method="post" action="post_details.php" enctype="multipart/form-data">
		<div class="header1">
	    	<h2>JUstSend</h2>
		</div>
		<div class="input">
			<input type="text" name="name" placeholder="Your name">
		</div>
		<div class="input">
			<input type="text" name="email" placeholder="Your email or phone">
		</div>
		<div class="input">
			<input type="text" name="subject" placeholder="Subject">
		</div>
		<div class="input">
			<textarea name="msg" cols="30" rows="5" placeholder="Your message"></textarea>
		</div>

		<div class="selectfiles">
	 		<input type="file" name="image" id="fileSelect" >
	 <!--<input type="file" name="file" id="fileSelect" >-->

		</div>
<!-- 		<button name="send" type="button">send</button>-->		
<input type="submit" name="submit" value="submit">
	</form>
</div>

</body>

</html>

