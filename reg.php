<?php
include("db.php");


$email=$_POST["email"];
$pass=$_POST["pass"];
$gen=$_POST["gen"];
$dob=$_POST["dob"];
$pos=$_POST["pos"];

$sql="INSERT INTO login_info values('$email','$gen','$dob','$pos','$pass')";

if(mysqli_query($con,$sql))
{
echo "<h1>Congratulations! Successfully Joined to our Family !!</h1>";
}
?>
<a href="sss2.html"><button>Continue</button></a>

