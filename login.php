<?php
include("db.php");


$email=$_POST["email"];
$pass=$_POST["pass"];

$sql="SELECT * FROM login_info where email='$email' AND pass='$pass'";

 $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

                echo "Logged in!";
		echo "<a href='sss2.html'><button>Let's goo</button></a>";

}
else
{
	echo "<h1>Sorry! Login Failed!!</h1>";
	echo "<a href='login.html'><button>Try again</button></a>";
}

