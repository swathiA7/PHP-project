<?php

include("db.php");
$sqll="select * from messege_table";
$res=mysqli_query($con,$sqll);

?>
<center>
<h1>All requests</h1>
<table border=5>
<tr>
<th>email</th>
<thsub</th>
<th>msg</th>
<th>action</th>
<th>acton</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($res))
{
?>
<td> <?php echo $row['email']; ?> </td>
<td> <?php echo $row['sub']; ?> </td>
<td> <?php echo $row['msg']; ?> </td>
<td> <button>accept</button></td>
<td> <button>reject</button></td>
</tr>
<?php } ?>
</table>
</center>
