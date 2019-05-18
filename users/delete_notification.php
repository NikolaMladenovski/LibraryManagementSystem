<?php
include('dbcon.php');
$id=$_GET['id'];
mysqli_query($mysqli,"delete from notif_user where notifuser_id='$id'")or die(mysql_error());
header('location:notification.php');
?>