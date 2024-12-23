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
	<h1>Request Update</h1>
	<form action="udpt.php" name="updt" method="post">
	<table border=5>
		<tr>
			<th>email</th>
			<th>sub</th>
			<th>msg</th>
			<th>operation</th>
		</tr>
		<tr>
		<?php
			while($row=mysqli_fetch_assoc($res))
			{
		?>
		<td> <input type="text" value=<?php echo $row['email']; ?> name="rtf" readonly/> </td>
		<td> <input type="text" value=<?php echo $row['sub']; ?> name="ntf"/> </td>
		<td> <input type="text" value=<?php echo $row['msg']; ?> name="gtf"/> </td>
				
		<td><input type="Submit" value="Update" name="update"/></td>
		
		</tr>
		<?php 	} ?>
	</table>
</center>
