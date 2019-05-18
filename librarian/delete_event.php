<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"update events set status = 'Archive' where event_id='$id'")or die(mysqli_error($mysqli));
header('location:nastani.php');
?>