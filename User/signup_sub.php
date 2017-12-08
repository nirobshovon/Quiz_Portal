<?php
include("C:/xampp/htdocs/Quiz_Portal/class/users.php");
$register=new users;
extract($_POST);
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"C:/xampp/htdocs/Quiz_Portal/Image".$img_name);
$query="insert into signup values ('','$f_name','$l_name','$email','$password','$img_name')";
if($register->signup($query))
{
	echo("<script>
	alert('Your Sign Up is succesfully Done');
	window.location.assign('index.php');
	</script>");
	//$register->url("index.php?run=success");

}


?>
