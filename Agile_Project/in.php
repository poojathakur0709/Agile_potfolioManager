<?php
if(isset($_POST['log']))
{
	SESSION_START();
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	SESSION_destroy();
	header("Location:Fresh.html");
}
?>
