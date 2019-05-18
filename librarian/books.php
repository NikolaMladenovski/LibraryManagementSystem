<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); 
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
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Книги</strong>
                                </div>
						<!--  -->
								    
						<!--  -->
						<center class="title">
						<h1>Books List</h1>
						</center>
                            <table cellpadding="0" cellspacing="0" border="0" class="table  table-bordered" >
								
								<p><a href="add_books.php" class="btn btn-success"><i class="icon-plus"></i>&nbsp;Додади книга</a></p>
							
                                <thead>
                                    <tr>
									    <th>Реден број</th>                                 
                                        <th>Наслов</th>                                 
                                        <th>Категорија</th>
										<th>Автор</th>
										<th class="action">Количина</th>
										<th>Издавач</th>
										
										
										<th>Издавач</th>
										<th>Датум на додавање</th>
										<th>година на издавање</th>
										<th>сериски број</th>
										<th>статус</th>
										<th class="action">Измени/Избриши</th>		
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php 

							
							
									

								  $user_query=mysqli_query($mysqli,"select * from book where status != 'Archive'")or die(mysql_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['book_id'];  
									$cat_id=$row['category_id'];
									$book_copies = $row['book_copies'];
									
									$borrow_details = mysqli_query($mysqli,"select * from borrowdetails where book_id = '$id' and borrow_status = 'pending'");
									$row11 = mysqli_fetch_array($borrow_details);
									$count = mysqli_num_rows($borrow_details);
										PtcDebug::bufferLog($count);		
										$total=$book_copies;
									
												PtcDebug::bufferLog($book_copies);		

												PtcDebug::bufferLog($total);		

									/* $t4otal =  $book_copies  - $borrow_details;
									
									echo $total; */
											$cat_query = mysqli_query($mysqli,"select * from category where category_id = '$cat_id'")or die(mysql_error());
											$cat_row = mysqli_fetch_array($cat_query);
									?>
									<tr class="del<?php echo $id ?>">
                                    <td><?php echo $row['book_id']; ?></td>
                                    <td><?php echo $row['book_title']; ?></td>
									<td><?php echo $cat_row ['classname']; ?> </td>
                                    <td><?php echo $row['author']; ?> </td> 
                                    <td class="action"><?php echo /* $row['book_copies']; */   $total;   ?> </td>
                                     <td><?php echo $row['book_pub']; ?></td>
									 <td><?php echo $row['publisher_name']; ?></td>
									 <td><?php echo $row['isbn']; ?></td>
									 <td><?php echo $row['copyright_year']; ?></td>		
									 <td><?php echo $row['date_added']; ?></td>
									 <td><?php echo $row['status']; ?></td>
									<?php include('toolttip_edit_delete.php'); ?>
                                    <td class="action">
                                        <a rel="tooltip"  title="Delete" id="<?php echo $id; ?>" href="#delete_book<?php echo $id; ?>" data-toggle="modal"    class="btn btn-danger"><i class="icon-trash icon-large"></i></a>
                                        <?php include('delete_book_modal.php'); ?>
										<a  rel="tooltip"  title="Edit" id="e<?php echo $id; ?>" href="edit_book.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
										
                                    </td>
									
                                    </tr>
									<?php  }  ?>
                           
                                </tbody>
                            </table>
							
			
			</div>		
			</div>
		</div>
    </div>
<!--
<div style="position:fixed;bottom:0;width:100%">
<?php //include('footer.php') ?>
</div>
-->
<?php include('footer.php') ?>
