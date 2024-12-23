<?php
include("db.php");


$email=$_POST["email"];
$sub=$_POST["sub"];
$msg=$_POST["msg"];

$sql="INSERT INTO messege_table values('$email','$sub','$msg')";

if(mysqli_query($con,$sql))
{
echo "<h1> Successfully submitted!!</h1>";
}
?>
<a href="sss2.html"><button>Continue</button></a>

