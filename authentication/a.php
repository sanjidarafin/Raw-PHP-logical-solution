<?php
	session_start();
	if(isset($_SESSION['username'])|| isset($_COOKIE['username'])){
		header ("Location: c.php");	
	}
	if(isset ($_POST['uname'])){
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		$_SESSION['username']= $username;
		//echo "Session variables are set. User name is " . $_SESSION['username'];
		if(isset($_POST["rememberme"])){
		
			setcookie ('username',$username,time()+3600);
		
		}
		
		header("Location: c.php");

	}
?>

<html>
	<form action='a.php' method='post'>
		<div class='container'>
			<h1>Log In</h1>
			User Name:<br><input type='text' id='name' name='uname' placeholder='name' ><br>
			Password:<br><input type='password' id='pass' name='pass' placeholder='pass'><br>
			Remember me<input type="checkbox" value="remember-me" name="rememberme">
			
			<button type="submit" class="btn btn-lg btn-primary" value="submit">Submit</button><br>
		</div>
	</form>
</html>