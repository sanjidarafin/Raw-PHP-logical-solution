<?php
	
	session_start();
	if(!isset($_SESSION['username'])){
		if(!isset($_COOKIE['username'])){			
			header ("Location: a.php");
		}		
	}
?>
<html>
	<body>
	
	<h2>Private Post</h2>
	<p>Hello FTFL! PHP Group.</p>
		<p><a href="d.php">log out</a></p>
	</body>
</html>