<?php 
include('dbcon.php');
require_once('PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();


$id=$_GET['id'];
$book_id = $_GET['book_id'];

mysqli_query($mysqli,"update borrow LEFT JOIN borrowdetails on borrow.borrow_id = borrowdetails.borrow_id   set borrow_status='returned',date_return= NOW() where borrow.borrow_id='$id' and borrowdetails.book_id = '$book_id'")or die(mysql_error());	
$buk=(int)$book_id;

$broj=mysqli_query($mysqli,"select book_copies from book where book_id='$book_id'")or die(mysql_error());
$broj=$broj+1;
mysqli_query($mysqli,"update book set book_copies='$broj' where book_id='$book_id'")or die(mysql_error());
$pom=mysqli_query($mysqli,"select * from notification where book_id='$book_id'")or die(mysql_error());
	

$num=mysqli_num_rows($pom);
			 PtcDebug::bufferLog($num);	


	if($num>0)
	{															
		while($row=mysqli_fetch_array($pom))	
		{			    $date = date('Y-m-d H:i:s');
		 PtcDebug::bufferLog($date);	
			$member_id=$row['member_id'];
			mysqli_query($mysqli,"insert into notif_user (member_id,book_id,date_available) values ('$member_id','$book_id','$date')")or die(mysql_error());
		 	mysqli_query($mysqli,"delete from notification where book_id='$book_id' and member_id='$member_id'")or die(mysql_error());
			
		}
	}

 header('location:view_borrow.php');



?>	