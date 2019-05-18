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
                                   
                                    <strong><i class="icon-book icon-large"></i>&nbsp;Достапни книги</strong>
                                </div>
						
						
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
								
								
							
                                <thead>
                                    <tr>
									                                    
                                        <th>Наслов</th>                                 
                                        <th>Категорија</th>
										<th>Автор</th>
										<th>Издавачка куќа</th>
										<th>Провери</th>


										
										
											
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									

								  $user_query=mysqli_query($mysqli,"select * from book where status != 'Archive'")or die(mysql_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];
									
									
									$borrow_details = mysqli_query($mysqli,"select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
									$row11 = mysqli_fetch_array($borrow_details);
									$count = mysqli_num_rows($borrow_details);
									
														

									
											$cat_query = mysqli_query($mysqli,"select * from category where category_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysqli_fetch_array($cat_query);
									?>
									
									
                                 <tr class="del<?php echo $id ?>">

                                    <td><?php echo $row['book_title']; ?></td>
									
                                 <td><?php echo $cat_row ['classname']; ?> </td>
                                   
                                    <td><?php echo $row['author']; ?> </td> 
                                    
                                     <td><?php echo $row['book_pub']; ?></td>
                                     
                                     <?php include('toolttip_edit_delete.php'); ?>
                                     <td class="action">
                                     	
                                     	 <a rel="tooltip"  title="" id="<?php echo $id; ?>" href="#check_book<?php echo $id?>" data-toggle="modal"    class="btn btn-danger" ><i >Провери</i></a>
                                        <?php include('check_book_modal.php'); ?>
                                     </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>




