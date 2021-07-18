<?php
require('dbconn.php');

$id=$_GET['id'];

$sql="delete from lms.book where BookId=('$id')";
if($conn->query($sql) === TRUE)
{
echo "<script type='text/javascript'>alert('Book Removed Successfully.')</script>";
header( "Refresh:0.01; url=AllBooks.php", true, 303);
}
else
{
	echo "<script type='text/javascript'>alert('Failed.')</script>";
    header( "Refresh:0.01; url=AllBooks.php", true, 303);

}

?>
