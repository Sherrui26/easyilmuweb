<?php
require('dbconn.php');

$num=$_GET['id'];

$sql="delete from LMS.user where RollNo=('$num')";

if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('User Removed Successfully.')</script>";
header( "Refresh:0.01; url=manageuser.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Failed.')</script>";
    header( "Refresh:0.01; url=manageuser.php", true, 303);

}

?>
