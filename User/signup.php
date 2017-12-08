<title>Sign Up</title>
<body>
<div>
<?php
			if(isset($_GET['run'])&& $_GET['run']=="success")
							{
								echo "<mark>Your registration successfully done</mark>";
							} 
?>
	<form method="post" action="signup_sub.php" enctype="multipart/form-data">
	<fieldset>
	<legend> <font face="courier new" size="5"><h1>Sign Up!!!</h1></font> </legend>
		<table border="0" width="100%" align="center">
			
			<tr>
				<td align="center">
					<br/><br/>
					First Name <br/><br/><br/>
					Last Name <br/><br/><br/>
					Email <br/><br/><br/>
					Password <br/><br/><br/>
					Confirm Password <br/><br/><br/>
					Upload Your Image <br/><br/><br/>
				</td>
				<td>
					<br/><br/>
					<input type="text" name="f_name"/><br/><br/><br/>
					<input type="text" name="l_name"/><br/><br/><br/>
					<input type="text" name="email" placeholder="example@gmail.com"/><br/><br/><br/>
						<abbr title="Must Contain at least 8 charecter with upper case(A-Z), lower case(a-z) and number(0-9)">
							<input type="text" name="password"/><br/><br/><br/>
						</abbr>
					<input type="text" name="con_password"/><br/><br/><br/>
					<input type="file" name="img"/><br/><br/><br/>
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<br/><br/>
					<input type="submit" name="submit" value="Sign Up"/>&nbsp&nbsp&nbsp
					<input type="submit" name="back" value="Back"/>
				</td>
			</tr>
		</table>
	</fieldset>	
	</form>
</div>	
</body>
