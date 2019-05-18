<?php include('session.php'); ?>

<?php 
include('dbcon.php');
require_once('PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
if (isset($_POST['submit'])){
$id=$_SESSION['id'];

	$star=$_POST['oldpassword'];
$password=$_POST['pass2'];
$pom=mysqli_query($mysqli,"select * from member where member_id='$id'")or die(mysql_error());
	$row=mysqli_fetch_array($pom);
	$pasvord=$row['password'];
	PtcDebug::bufferLog($pasvord);
	PtcDebug::bufferLog($star);
	if($star==$pasvord)
	{
		mysqli_query($mysqli,"update member set password = '$password' where member_id='$id'")or die(mysql_error());
	}
	else
	{
echo '<script type="text/javascript">alert("Внесовте погрешен пасворд!"); 
location.href="user_info.php";
</script>';
	}
								
								
//header('location:user_info.php');
}
?>	