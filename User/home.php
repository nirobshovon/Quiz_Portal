<?php
include("C:/xampp/htdocs/Quiz_Portal/class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
$profile->cat_shows();
?>

<title>Portal</title>
<body>
		<form>
		<table border="5" width="100%" align="center">
			<tr height="60" align="center">
				<td  colspan="2">
					<font color="FF5733" face="verdana" size="3">Welcome to your Account</font>
				</td>
				
				<td  align="right">
					<font color="FF5733" face="verdana" size="3"><a href="index.php">Logout</a></font>
				</td>

			</tr>
			
			<tr height="60">
				<td align="center">
					<font face="verdana"><a href="home.php">Home</a></font>
				</td>
				
				<td align="center">
					<font face="verdana"><a href="Profile.php">Profile</a></font>
				</td>
				
				<td align="center">
					<font face="verdana"><a href="quiz.php">Your Quiz</a></font>
				</td>
			</tr>
			
			<tr height="300">
				<td colspan="3" align="center">      
					   
					   <div>

						  <form  method="post" action="qus_show.php">
						  <select class="form-control" id="" name="cat">
						  <option >select category</option>
						  <?php		  
							  foreach($profile->cat as $category)
							  {  ?>			  			
								<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
								<?php   }?>
						  </select><br/><br/><br/><br/>
						  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
						</form>
					 
					  
					  </div>
					
				</td>	
			</tr>
			
		</table>
		</form>
</body>
