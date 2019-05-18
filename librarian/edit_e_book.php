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
		$query=mysqli_query($mysqli,"select * from ebooks where book_id='$get_id'")or die(mysql_error());
		$row=mysqli_fetch_array($query);
		$category_id = $row['category_name'];
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Промени Е-Книги</div>
			<p><a class="btn btn-info" href="e_knigi.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внеси податоци</div>	
	<form class="form-horizontal" method="POST" action="update_e_books.php" enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Наслов:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title" value="<?php echo $row['book_title']; ?>" placeholder="book_title" required>
			<input type="hidden" id="inputEmail" name="id" value="<?php echo $get_id;  ?>" placeholder="book_title" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Категорија:</label>
			<div class="controls">
			<select name="category_id">
				<option value="<?php echo $category_id; ?>"><?php echo $category_id; ?></option>
				
				<?php
					if($category_id != "DetskaLiteratura")
					echo "<option value=\"DetskaLiteratura\">Detska literatura</option>";
					if($category_id != "Drami")
					echo "<option value=\"Drami\">Drami</option>";
					if($category_id != "Istorija")
					echo "<option value=\"Istorija\">Istorija</option>";
					if($category_id != "Poezija")
					echo "<option value=\"Poezija\">Poezija</option>";
					if($category_id != "Raskazi")
					echo "<option value=\"Raskazi\">Raskazi</option>";
				?>
			</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Автор:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="author" value="<?php echo $row['book_author']; ?>" placeholder="author" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputPassword" name="isbn" value="<?php echo $row['isbn']; ?>" placeholder="isbn" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Година на издавање:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year" value="<?php echo $row['copyright_year']; ?>" placeholder="copyright_year" required>
			</div>
		</div>
		<!-- Ne se preporachuva dodavanje na predefined vrednost na input=file -->
		<div class="control-group">
			<label class="control-label" for="inputPassword">Слика:</label>
			<div class="controls">
				<input type="file" id="inputPassword" name="file_img" required/> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Книга:</label>
			<div class="controls">
				<input type="file" id="inputPassword" name="file_file" required/>
			</div>
		</div>
		
		
		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Промени</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>