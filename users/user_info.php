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
			<div>	
			<div class="span12">	
			   <div class="alert alert-info">
                                   
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Информации за корисникот</strong>
                                </div>
						
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered" >
								
								
							
                                <thead>
                                    <tr>
									                                    
                                        <th>Име</th>                                 
										<th>Презиме</th>
										<th>Корисничко име</th>
										<th>E-mail</th>
										<th>Контакт</th>
									</tr>
                                </thead>
                                <tbody>
                                <?php 
									$id=$_SESSION['id'];
									$user=mysqli_query($mysqli,"select * from member where member_id='$id'")or die(mysql_error());
									
									while($row=mysqli_fetch_array($user))
									{
										$firstname=$row['firstname'];
										$lastname=$row['lastname'];
										$username=$row['username'];
										$contact=$row['contact'];
										$email=$row['email'];
										?>
										
										
										<tr>
                                    <td><?php echo $firstname ?></td>
                                     <td><?php echo $lastname ?></td>
                                     <td><?php echo $username ?></td>
									<td><?php echo $email ?></td>
									<td><?php echo $contact ?></td>
                                   <?php include('toolttip_edit_delete.php'); ?>
                                   <td width="100">
                                   		<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_userinfo.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
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

<div style="position:fixed; bottom: 0px; width:100%;">
<?php include('footer.php') ?>
</div>