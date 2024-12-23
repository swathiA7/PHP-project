<?php

include("db.php");

$ur=$_POST["rtf"];
$un=$_POST["ntf"];
$ug=$_POST["gtf"];

$sql="UPDATE messege_table SET email='$ur',sub='$un',msg='$ug'";

if(mysqli_query($con,$sql))
{
	echo "<h3> Updated successfully </h3>";
	echo "<a href='sss2.html'><button>Let's goo</button></a>";


}

?>
