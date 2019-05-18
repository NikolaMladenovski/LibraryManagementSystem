<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include ('k.php')?>
<?php include('navbar.php'); 
include('dbcon.php');
require_once('PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
?>

<!-- Nedostatoci
	-povekjedneven nastan -> event_date se koristi samo za sort, ne se printa nikade 
	- date_added kje se prikazhuva vo modal_nastani 
	-->

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
			   <div class="alert alert-info">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Е-Книги</strong>
                                </div>
						
						<center class="title">
						<h1>Книги</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered">
								
								<p><a href="add_events.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Додади настан</a></p>
							
                                <thead>
                                    <tr>
										<!-- Bi mozhelo da se dodadeshe i br. na sliki..., no sepak akcentot ne e nastani -->
									    <th>ID</th>                                 
                                        <th>Име</th>                                 
										<th>Опис</th>
										<th>Датум на оддржување на настанот</th>
										<th>Датум на додавање на настанот</th>
										<th>Локација на слика</th>
										<th>Tип на слика</th>
										<th>Опис на слика</th>
										<th class="action">Избриши/додади</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									

									$user_query=mysqli_query($mysqli,"select * from events where status != 'Archive'")or die(mysql_error());									
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['event_id'];  
									//$cat_id=$row['category_name']; --Nemashe potreba
									
									
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['event_id']; ?></td>
                                    <td><?php echo $row['event_name']; ?></td>
                                    <td><?php echo $row['event_dscr'] ?></td>
                                    <td><?php echo $row['event_date']; ?> </td> 
                                    <td><?php echo $row['date_added']; ?> </td> 

								
							<!--		 <td><?php //echo $row['date_added']; ?></td> -->
							<!--		 <td><?php //echo $row['status']; ?></td> -->
									 <td><?php echo $row['img_path']; ?></td>		
									 <td><?php echo $row['img_type']; ?></td>		
									 <td><?php echo $row['img_caption']; ?></td>		

									<?php include('toolttip_edit_delete.php'); ?>

                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_event<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_event_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_event.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>

                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<!-- <div style="position:fixed;bottom:0;width:100%">
</div> -->
<?php include('footer.php') ?>