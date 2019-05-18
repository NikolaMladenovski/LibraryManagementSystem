<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); 
include('dbcon.php');
require_once('PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                   
                                    <strong><i class="icon-book icon-large"></i>&nbsp;Нотификации</strong>
                                </div>
						
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">
								
								
							
                                <thead>
                                    <tr>
									                                    
                                        <th>Наслов</th>                                 
										<th>Достапна од:</th>
										<th>Избриши</th>


										
										
											
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
									$id=$_SESSION['id'];
									$notif=mysqli_query($mysqli,"select * from notif_user where member_id='$id'")or die(mysql_error());
									
									while($row=mysqli_fetch_array($notif))
									{
										$notif_id=$row['notifuser_id'];
										$book_id=$row['book_id'];
										$date_available=$row['date_available'];
										$name=mysqli_query($mysqli,"select * from book where book_id='$book_id'")or die(mysql_query());
										$row1=mysqli_fetch_array($name);
										$book_name=$row1['book_title'];
										?>
										
										
										<tr class="del<?php echo $book_id ?>">
                                    <td><?php echo $book_name ?></td>
                                     <td><?php echo $date_available ?></td>

									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $notif_id; ?>" href="#delete_notification<?php echo $notif_id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_notification_modal.php'); ?>
										
                                    </td>
									
                                    </tr>
										
										
										
										
										
								<?php		
									}
									
									
									
									?>
								 

							
							
									

                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>

<div style="position:fixed; bottom:0px; width:100%;">
<?php include('footer.php') ?>
</div>





