	
	<?php
	$bookid=$id;
	$memberid=$_SESSION['id'];
	$kver=mysqli_query($mysqli,"select * from book where book_id='$bookid'")or die(mysql_error());
	
	$book=mysqli_fetch_array($kver);
	$numcop=$book['book_copies'];

	if($numcop>0)
	{
	?>
<div id="check_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Книгата е достапна</div>

		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>		
<?php
	}
	else
	{
		?>
<div id="check_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Книгата не е достапна</div>

		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
		</div>
    </div>

<?php
		$pom=mysqli_query($mysqli,"select * from notification where member_id='$memberid' and book_id='$bookid'")or die(mysql_error());
		$num_pom=mysqli_num_rows($pom);
															//PtcDebug::bufferLog(NOW());		

		if($num_pom==0)
		{
			mysqli_query($mysqli,"insert into notification (member_id,book_id) values('$memberid','$bookid')")or die(mysql_error());
		}
		
	}
	?>
	
