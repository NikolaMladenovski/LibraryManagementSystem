<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
				<div class="span12">		
						<div class="alert alert-info"><strong>Изнајмени книги</strong></div>
                            <table cellpadding="0" cellspacing="0" border="0" class="table" id="example">

                                <thead>
                                    <tr>
                                        <th>Наслов</th>                                 
                                        <th>Корисник</th>                                 
                                                                      
                                        <th>Датум на изнајмување</th>                                 
                                        <th>Рок на враќање</th>                                
                                        <th>Датум на враќање</th>
										<th>Статус</th>
                                    </tr>
                                </thead>
                                <tbody>
								 
                                  <?php  $user_query=mysqli_query($mysqli,"select * from borrow
								LEFT JOIN member ON borrow.member_id = member.member_id
								LEFT JOIN borrowdetails ON borrow.borrow_id = borrowdetails.borrow_id
								LEFT JOIN book on borrowdetails.book_id =  book.book_id 
								ORDER BY borrow.borrow_id DESC")or die(mysql_error());
									while($row=mysqli_fetch_array($user_query)){
									$id=$row['borrow_id'];
									$book_id=$row['book_id'];
									$borrow_details_id=$row['borrow_details_id'];
				
									?>
									<tr class="del<?php echo $id ?>">
									
									                              
                                    <td><?php echo $row['book_title']; ?></td>
                                    <td><?php echo $row['firstname']." ".$row['lastname']; ?></td>
									<td><?php echo $row['date_borrow']; ?></td> 
                                    <td><?php echo $row['due_date']; ?> </td>
									<td><?php echo $row['date_return']; ?> </td>
									<td><?php echo $row['borrow_status'];?></td>
									<?php $pom1=$row['date_return'];
										if($pom1=="")
										{
											
									?>
									<td> <a rel="tooltip"  title="Return" id="<?php echo $borrow_details_id; ?>" href="#delete_book<?php echo $borrow_details_id; ?>" data-toggle="modal"    class="btn btn-success"><i class="icon-check icon-large"></i>Врати</a>
                                    <?php include('modal_return.php'); ?>
                                    </td> 
									 
                                    </tr>
									<?php  }  ?>
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
<!-- <div style="position:fixed;bottom:0;width:100%">
</div> -->
<?php include('footer.php') ?>
