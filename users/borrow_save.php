	<?php
 	include('dbcon.php');
require_once('PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
	
		$id=$_POST['selector'];
 	$member_id  = $_POST['member_id'];
	$due_date  = $_POST['due_date'];

	if ($id ==''){ 
	header("location: borrow.php");
	 }
	else{
	


	mysqli_query($mysqli,"insert into borrow (member_id,date_borrow,due_date) values ('$member_id',NOW(),'$due_date')")or die(mysql_error());
	$query = mysqli_query($mysqli,"select * from borrow order by borrow_id DESC")or die(mysql_error());
	$row = mysqli_fetch_array($query);
	$borrow_id  = $row['borrow_id'];
		
		
	$numcopies_query=mysqli_query($mysqli,"select * from book where book_id='$id[0]'")or die(mysql_error());
	$numcopies=mysqli_fetch_array($numcopies_query);
	$num=$numcopies['book_copies'];

		$num=$num-1;
	PtcDebug::bufferLog($num);

		
		mysqli_query($mysqli,"UPDATE book SET book_copies='$num' WHERE book_id='$id[0]'")or die(mysql_error());
		//mysqli_affected_rows($mysqli);
	

$N = count($id);
		echo($N);
		
for($i=0; $i < $N; $i++)
{
	 mysqli_query($mysqli,"insert into borrowdetails (book_id,borrow_id,borrow_status,date_return) values('$id[$i]','$borrow_id','pending','')")or die(mysql_error());

}
header("location: borrow.php");
}  
?>
	
	

	
	