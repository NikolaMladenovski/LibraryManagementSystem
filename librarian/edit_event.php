<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
<?php include('k.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($mysqli,"select * from events where event_id='$get_id'")or die(mysql_error());
		$row=mysqli_fetch_array($query);
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Edit Events</div>
			<p><a class="btn btn-info" href="nastani.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внесете ги бараните информации</div>	
	<form class="form-horizontal" method="POST" action="update_event.php" enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputName">Име на настан:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputName" name="name"  placeholder="Име на настан"  value="<?php echo $row['event_name']; ?>" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>

			</div>
		</div>
		
			<div class="control-group">
			<label class="control-label" for="inputDSCR">Опис на настан:</label>
			<div class="controls">
			<textarea maxlength="5000" rows="10" class="span4" id="inputDSCR" name="DSCR" placeholder="Опис на настан" required><?php echo $row['event_dscr']; ?></textarea>
		</div>
		</div>

		
		<div class="control-group">
			<label class="control-label" for="inputDate">Датум на оддржување (доколку се работи за повеќедневен настан - внеси го првиот ден на оддржување на настанот):</label>
			<div class="controls">
				<input type="date"  class="span4" id="inputDate" name="date" value="<?php echo $row['event_date']; ?>"<?php //echo substr($row['event_date'],0,4)."-".substr($row['event_date'],5,2)."-".substr($row['event_date'],8,2)."T".substr($row['event_date'],11,2).":".substr($row['event_date'],14,2).":00"; ?> required>
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
				<input type="text"  class="span4" id="inputCaption" name="caption"  placeholder="Опис на слика"  value="<?php echo $row['img_caption']; ?>" required>
			</div>
		</div>
		<?php //echo substr($row['event_date'],0,4)."-".substr($row['event_date'],5,2)."-".substr($row['event_date'],8,2)."T".substr($row['event_date'],11,2).":".substr($row['event_date'],14,2); ?>

		<div class="control-group">
			<div class="controls">
				<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Update</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>