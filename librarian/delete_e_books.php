<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"update ebooks set status = 'Archive' where book_id='$id'")or die(mysql_error());
header('location:e_knigi.php');
?>