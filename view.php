<html>
<style>
body{   background-image:url("https://cdn.wallpapersafari.com/28/27/vjGBAp.jpg");   
		background-size:100%;
		}
</style> 
</html>
<?php

include("db.php");
$email=$_POST["email"];
$sqll="select * from messege_table where email='$email'";
$res=mysqli_query($con,$sqll);

?> 
<center>
	<h1>Here is your request</h1>
	<table border=5>
		<tr>
			<th>email</th>
			<th>sub</th>
			<th>msg</th>
		</tr>
		<tr>
		<?php
			while($row=mysqli_fetch_assoc($res))
			{
		?>
		<td> <?php echo $row['email']; ?> </td>
		<td> <?php echo $row['sub']; ?> </td>
		<td> <?php echo $row['msg']; ?> </td>
		</tr>
		<?php 	} ?>
	</table>
</center>