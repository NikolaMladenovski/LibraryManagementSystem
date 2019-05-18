<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">	
		<?php 
		$query=mysqli_query($mysqli,"select * from member where member_id='$get_id'")or die(mysql_error());
		$row=mysqli_fetch_array($query);
		
		?>
             <div class="alert alert-info"><i class="icon-pencil"></i>&nbsp;Промени</div>
			<p><a class="btn btn-info" href="user_info.php"><i class="icon-arrow-left icon-large"></i>&nbsp;Назад</a></p>
	<div class="addstudent">
	<div class="details">Внесете ги бараните информации</div>	
	<form class="form-horizontal" method="POST" action="update_userinfo.php" enctype="multipart/form-data">
			
		
		<div class="control-group">
			<label class="control-label" for="inputPassword">Стара Лозинка:</label>
			<div class="controls">
			<input type="password" id="oldPassword" name="oldpassword"  placeholder="" required>
			</div>
		</div>
		<div class="control-group">
			<label for="pass1" class="control-label">Нова лозинка:</label>
           <div class="controls">
            <input type="password" name="pass1" id="pass1" pb-role="new_password">
			</div>
		</div>
		<div class="control-group">
			<label for="pass2" class="control-label">Нова лозинка:</label>
           <div class="controls">
            <input type="password" name="pass2" id="pass2" onkeyup="checkPass(); return false;" pb-role="confirm_password">
            <span id="confirmMessage" class="confirmMessage"></span>
			</div>
		</div>
		
		
		
		
			
		
		
				
		

		<div class="control-group">
			<div class="controls">
			<button name="submit" type="submit" class="btn btn-success"><i class="icon-save icon-large"></i>&nbsp;Смени</button>
			</div>
		</div>
    </form>				
			</div>		
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>
<script>
	
	function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  
</script>