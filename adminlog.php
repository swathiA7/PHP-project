<?php
include("db.php");


$email=$_POST["email"];
$pass=$_POST["pass"];


        if ($email=="admin" && $pass=="admin")  {

                echo "Logged in!";
		echo "<a href='admin.html'><button>Let's goo</button></a>";

}
else
{
	echo "<h1>Sorry! Login Failed!!</h1>";
	echo "<a href='login.html'><button>Try again</button></a>";
}

