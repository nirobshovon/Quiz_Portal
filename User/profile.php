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
					<div id="menu1" class="tab-pane fade">
						  <h3>Showing profile</h3>
						  
						  <table class="table" border="1" width="100%">
						<thead>
						  <tr>
							<th>Id</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Email</th>
							<th>Image</th>
						  </tr>
						</thead>
						<tbody>
						
						<?php 
						foreach($profile->data as $prof)
						{?>
						  <tr>
							<td><?php echo $prof['Id'];?></td>
							<td><?php echo $prof['f_name'];?></td>
							<td><?php echo $prof['L_name'];?></td>
							<td><?php echo $prof['email'];?></td>
							<td><img src="C:/xampp/htdocs/Quiz_Portal/Image/<?php echo $prof['image'];?>" width="35px" height="30px" ></img></td>
						  </tr>
						</tbody>
						<?php 	}?>
					  </table>
					</div>
				</td>	
			</tr>
			
		</table>
		</form>
</body>
