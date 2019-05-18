<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php');
include('dbcon.php');
require_once('PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>Изнајмени книги</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" >

                                <thead>
                                    <tr>
                                        <th>Наслов</th>                                 
                                        <th>Датум на изнајмување</th>                                 
                                        <th>Рок</th>                                
										<th>Статус</th>
                                   <th>Датум на враќање</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php
	 								$pom=$_SESSION['id'];
									$que="select * from borrow where member_id='$pom'";
									$user_query=mysqli_query($mysqli,$que)or die(mysql_error());

									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$date_borrow=$row['date_borrow'];
									$due_date=$row['due_date'];
									PtcDebug::bufferLog($id);		
									PtcDebug::bufferLog($date_borrow);		

										$status=mysqli_query($mysqli,"select * from borrowdetails where borrow_id='$id'")or die(mysql_error());
										$row1=mysqli_fetch_array($status);
										
										$book_id=$row1['book_id'];
																			PtcDebug::bufferLog($book_id);		

										$book=mysqli_query($mysqli,"select * from book where book_id='$book_id'")or die(mysql_error());
										$row2=mysqli_fetch_array($book);
										$book_name=$row2['book_title'];
																			PtcDebug::bufferLog($book_name);		

									
									$borrow_status=$row1['borrow_status'];
									$date_return=$row1['date_return'];
				
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $book_name; ?></td>
									<td><?php echo $date_borrow; ?></td> 
                                    <td><?php echo $due_date ?> </td>
									<td><?php echo $borrow_status; ?> </td>
									<td><?php echo $date_return;?></td>
									
									 
                                    </tr>
									<?php  }  ?>
                                </tbody>
                            </table>
							

			</div>		
	
<script>		
$(".uniform_on").change(function(){
    var max= 3;
    if( $(".uniform_on:checked").length == max ){
	
        $(".uniform_on").attr('disabled', 'disabled');
		         alert('3 Books are allowed per borrow');
        $(".uniform_on:checked").removeAttr('disabled');
		
    }else{

         $(".uniform_on").removeAttr('disabled');
    }
})
</script>		
			</div>
		</div>
    </div>
	
<div style="position:fixed; bottom:0px; width:100%;" >
<?php include('footer.php') ?>
</div>