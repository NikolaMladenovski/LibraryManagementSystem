<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar.php'); ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		
             <div class="alert alert-info">Додади корисник</div>
			<p><a href="member.php" class="btn btn-info"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внеси податоци</div>		
	<form class="form-horizontal" method="POST"  enctype="multipart/form-data">
			
		<div class="control-group">
			<label class="control-label" for="inputEmail">Име:</label>
			<div class="controls">
			<input type="text" id="inputEmail" name="firstname"  placeholder="Firstname" required>

			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Презиме:</label>
			<div class="controls">
			<input type="text" id="inputPassword" name="lastname"  placeholder="Lastname" required>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputEmail">E-mail:</label>
			<div class="controls">
			<input type="email" id="inputEmail" name="email"  placeholder="E-mail" required>

			</div>
		</div>
	
		<div class="control-group">
			<label class="control-label" for="inputPassword">Телефон:</label>
			<div class="controls">
			<input type='tel' pattern="[0-9]{11,11}" class="search" name="contact"  placeholder="Phone Number"  autocomplete="off"  maxlength="11" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputPassword">Тип:</label>
			<div class="controls">
			<select name="type" required>
			
			
			
									<option></option>
									<option>Student</option>
									<option>Teacher</option>
									<option></option>
									
				</select>
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
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$type=$_POST['type'];

$username="";
$password="";
$status="active";
								
mysqli_query($mysqli,"insert into member(firstname,lastname,username,email,password,contact,type,status) values('$firstname','$lastname','$username','$email','$password','$contact','$type','$status')")or die(mysql_error());
 
 
}
?>	