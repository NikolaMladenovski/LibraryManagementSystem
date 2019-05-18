<?php include('header.php'); ?>

						<?php
							session_start();
$_SESSION['message'] = '';
								if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //two passwords are equal to each other
    if ($_POST['password'] == $_POST['confirmpassword']) {
        
	
        //set all the post variables
        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = md5($_POST['password']); //md5 has password for security
        $name=$mysqli->real_escape_string($_POST['name']);
		$surname=$mysqli->real_escape_string($_POST['surname']);
		$contact=$mysqli->real_escape_string($_POST['contact']);
		$type="student";
		$status="active";
        //make sure the file type is image
       $mem=mysqli_query($mysqli,"SELECT * FROM member WHERE firstname='$name' AND lastname='$surname'")or die(mysql_query());
		$row=mysqli_num_rows($mem);
		if($row>0)
		{
			    
                //set session variables
                $_SESSION['username'] = $username;
				$sql1=mysqli_query($mysqli,"UPDATE member SET password='$password' WHERE email='$email'")or die(mysqli_query());
				$sql2=mysqli_query($mysqli,"UPDATE member SET username='$username' WHERE email='$email'")or die(mysqli_query());

                //insert user data into database
              // $sql = "INSERT INTO member (firstname,lastname,username, email, password,contact,type,status) "
             //      . "VALUES ('$name', '$surname', '$username', '$email', '$password', '$contact', '$type', '$status')";
		//mysqli_query($mysgli,"insert into member")
                
                //if the query is successsful, redirect to welcome.php page, done!
               if ($sql1 && $sql2)
			   {
				   $_SESSION['message']='User registered!';
			   }
                else {
                    $_SESSION['message'] = 'User could not be added to the database!';
                }
                $mysqli->close();          
		}
		else
		{
			 
			$_SESSION['message']='User could not be registered!';
		}
            
          
            
        
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
    }
}
								?>
    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
				
				<div class="login">
				<div class="log_txt">
				<p><strong>Внеси податоци</strong></p>
				</div>
						<form class="form-horizontal" method="POST">
								
								<div class="control-group">
									<label class="control-label" for="inputEmail">Име</label>
									<div class="controls">
									<input type="text" name="name" id="name" placeholder="Name" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail">Презиме</label>
									<div class="controls">
									<input type="text" name="surname" id="surname" placeholder="Surname" required>
									</div>
								</div>
									<div class="control-group">
									<label class="control-label" for="inputEmail">Корисничко име</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="username" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail">E-mail</label>
									<div class="controls">
									<input type="text" name="email" id="email" placeholder="E-Mail" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputEmail">Контакт</label>
									<div class="controls">
									<input type="tel" name="contact" id="contact" placeholder="Contact" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Лозинка</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password" required>
								</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Потврди лозинка</label>
									<div class="controls">
									<input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm password" required>
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="register" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Регистрирај се</button>
								</div>
								</div>
								      <div align="center" ><?= $_SESSION['message'] ?></div>

						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<?php include('footer.php') ?>