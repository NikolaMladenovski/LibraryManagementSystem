<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Додади Е-Книга</div>
			<p><a href="e_knigi.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внеси податоци</div>		
	<form class="form-horizontal" method="POST"  enctype="multipart/form-data">
			
	
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Наслов:</label>
			<div class="controls">
			<input type="text" class="span4" id="inputEmail" name="book_title"  placeholder="Book Title" required>
			</div>
		</div>
		
		
			<div class="control-group">
			<label class="control-label" for="inputPassword">Категорија</label>
			<div class="controls">
			<select name="category_id">
			<option></option>
			<!--<?php
			/*$cat_query = mysqli_query($mysqli,"select * from category");
			while($cat_row = mysqli_fetch_array($cat_query)){
			?>
			<option value="<?php echo $cat_row['category_id']; ?>"><?php echo $cat_row['classname']; */ ?></option> -->
			<?php  //}?>
			<option value="DetskaLiteratura">Детска литература</option>
			<option value="Drami">Драми</option>
			<option value="Istorija">Историја</option>
			<option value="Poezija">Поезија</option>
			<option value="Raskazi">Раскази</option>

			</select>
		</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputEmail">Автор:</label>
			<div class="controls">
	<input type="text"  class="span4" id="inputPassword" name="author"  placeholder="Author" required>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Isbn:</label>
			<div class="controls">
			<input type="text"  class="span4" id="inputPassword" name="isbn"  placeholder="ISBN" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Година на издавање:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="copyright_year"  placeholder="Copyright Year" required>
			</div>
		</div>
		
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
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Зачувај</button>
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
$book_title=$_POST['book_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$isbn=$_POST['isbn'];
$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */


$filetmp = $_FILES["file_img"]["tmp_name"];
$filename = $_FILES["file_img"]["name"];
$filetype = $_FILES["file_img"]["type"];
$filepath = "../LMS/".$filename;
if(!getimagesize($_FILES['file_img']['tmp_name'])){
    die('Please ensure you are uploading an image.');
}


$filefiletmp = $_FILES["file_file"]["tmp_name"];
$filefilename = $_FILES["file_file"]["name"];
$filefiletype = $_FILES["file_file"]["type"];
$filefilepath = "../knigi/".$filefilename;

$status='a';

								
mysqli_query($mysqli,"insert into ebooks (book_title,book_author,category_name,img_path,img_type,file_name,file_path,file_type,copyright_year,isbn,img_name,status)
 values('$book_title','$author','$category_id','$filepath','$filetype','$filefilename','$filefilepath','$filefiletype','$copyright_year','$isbn','$filename','$status')")or die(mysqli_error($mysqli));

move_uploaded_file($filetmp,$filepath);
move_uploaded_file($filefiletmp,$filefilepath);


 
}
?>	