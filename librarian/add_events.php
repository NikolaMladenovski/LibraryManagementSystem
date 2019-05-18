<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Додади настан</div>
			<p><a href="nastani.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внесете ги бараните информации</div>		
	<form class="form-horizontal" method="POST"  enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputName">Име на настан:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputName" name="name"  placeholder="Име на настан" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputDSCR">Опис на настан:</label>
			<div class="controls">
			<textarea maxlength="5000" rows="10" class="span4" id="inputDSCR" name="DSCR"  placeholder="Опис на настан" required></textarea>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputDate">Датум на оддржување (доколку се работи за повеќедневен настан - внеси го првиот ден на оддржување на настанот):</label>
			<div class="controls">
	<input type="date"  class="span4" id="inputDate" name="date"  required>
			</div>
		</div>
		
		
		<div class="control-group">
			<label class="control-label" for="inputImage">Слика:</label>
			<div class="controls">
				<input type="file" id="inputImage" name="file_img" required/>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputCaption">Опис на слика:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputCaption" name="caption"  placeholder="Опис на слика" required>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Save</button>
			</div>
		</div>
    </form>					
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$name=$_POST['name'];
$DSCR=$_POST['DSCR'];
$date=$_POST['date'];
$caption=$_POST['caption'];


$filetmp = $_FILES["file_img"]["tmp_name"];
$filename = $_FILES["file_img"]["name"];
$filetype = $_FILES["file_img"]["type"];
$filepath = "../sliki/nastani/".$filename;
if(!getimagesize($_FILES['file_img']['tmp_name'])){
    die('Please ensure you are uploading an image.');
}


$status='a';

								
mysqli_query($mysqli,"insert into events (event_name,event_dscr,event_date,date_added,img_path,img_type,img_name,img_caption,status)
 values('$name','$DSCR','$date',NOW(),'$filepath','$filetype','$filename','$caption','$status')")or die(mysqli_error($mysqli));

move_uploaded_file($filetmp,$filepath);


 
}
?>	