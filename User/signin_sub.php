<?php
include("C:/xampp/htdocs/Quiz_Portal/class/users.php");
$signin=new users;
extract($_POST);
if($signin->signin($email,$password))
{
	$signin->url("home.php");
}
else
{
	echo("<script>
	alert('Wrong Password Or Email');
	window.location.assign('index.php');
	</script>");;
}
?>