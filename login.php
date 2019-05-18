<?php 
include('header.php');
include('navbar.php');
 include('dbcon.php');?>

    <div class="container">
		<div class="margin-top">
			<div class="row">	
			<div class="span12">
				
				<div class="login">
				<div class="log_txt">
				<p><strong>Внеси податоци</strong></p>
				</div>
						<form class="form-horizontal" action="loginpom.php" method="POST" >
								<div class="control-group">
									<label class="control-label" for="inputEmail">Корисничко име</label>
									<div class="controls">
									<input type="text" name="username" id="username" placeholder="Username">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="inputPassword">Лозинка</label>
									<div class="controls">
									<input type="password" name="password" id="password" placeholder="Password">
								</div>
								</div>
								<div class="control-group">
									<div class="controls">
									<button id="login" name="submit" type="submit" class="btn"><i class="icon-signin icon-large"></i>&nbsp;Логирај се</button>
								</div>
								</div>
								
	
	
						</form>
				
				</div>
			</div>		
			</div>
		</div>
    </div>
<div style="position: fixed; bottom: 0%; width:100%;">
<?php include('footer.php');?>
</div>						