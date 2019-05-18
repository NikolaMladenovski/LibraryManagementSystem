<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('header_knigi.php'); ?>
<?php  
include('dbcon.php');
require_once('librarian/PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
?>

    <div class="container">
	<div class="margin-top">
		<div class="span12">
				

					<div class="alert alert-info"><Strong>ИСТОРИЈА </strong>&nbsp;
					            <div class="pull-right">
								<i class="icon-calendar icon-large"></i>
								<?php
								$Today = date('y:m:d');
								$new = date('l, F d, Y', strtotime($Today));
								echo $new;
								?>
							</div>
					</div>
				
					
				</div>
		</div>
		<!-- MENU -->
			
					<?php
							$user_query=mysqli_query($mysqli,"select * from ebooks where status != 'Archive'")or die(mysql_error());									
							$num_rows=0;
							while($row=mysqli_fetch_array($user_query)){
							$num_rows+=1;
							}
					?>
			
			<div class="navbar navbar-fixed-top navbar-inner navbar-inverse"  id="slider">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="nav-collapse collapse">
					<ul class="nav">
					<li class="divider-vertical"></li>
					<li class="">
					<a  rel="tooltip"  data-placement="bottom" title="Home" id="home"   href="siteknigi.php">&nbsp;Сите книги <span class="badge"><?php echo $num_rows;?></span></a> </li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom" title="Click Here to About" id="login" href="detstkaliteratura.php">&nbsp;Детстка литература</a> 
					</li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom"  id="login" href="drami.php">&nbsp;Драми</a>
					</li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom"  id="login" href="#">&nbsp;Историја</a>
					</li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom"  id="login" href="poezija.php">&nbsp;Поезија</a>
					</li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom"  id="login" href="raskazi.php">&nbsp;Раскази</a>
					</li>
					
					
					<li class="divider-vertical"></li>
					<li class="divider-vertical"></li>
					<li class="divider-vertical"></li> 
				
					<li class="divider-vertical"></li> 
					<li class="signup"><span class="sg"></span></li>
					</ul>

                    </div>
                </div>
            </div>
        </div> 
		
	<!-- GALLERY -->
	<div class="container">
	<!--
	<div class="gallery3">
	<a target="_blank" href="knigi/kniga1.pdf">
		<img src="LMS/gallery1.jpg" alt="Fjords" width="300" height="200" class="myIMG">
	</a>
	<div class="desc3">11 Октомври</div>
	<div class="desc33">Литературен зборник, 1948</div>
	</div>

	<div class="gallery3">
		<a target="_blank" href="knigi/kniga15.pdf">
			<img src="LMS/gallery15.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Македонски правопис</div>
		<div class="desc33">Изработено од комисијата за јазик и литература</div>
	</div>
	-->
	<?php
		$user_query=mysqli_query($mysqli,"select * from ebooks where status != 'Archive' and category_name = 'Istorija'")or die(mysql_error($mysql));									
		while($row=mysqli_fetch_array($user_query)){
		$id=$row['book_id'];  
		$cat_id=$row['category_name']; 
        $book_title=$row['book_title']; 
        $book_author=$row['book_author'];		  
		$img_path=$row['img_path']; 
		//$row['img_type']; 	
		$file_path=$row['file_path']; 
		//$row['file_type'];
		
		echo "<div class=\"gallery3\">
		<a target=\"_blank\" href=\"librarian/".$file_path."\">
			<img src=\"librarian/".$img_path."\" alt=\"Mountains\" width=\"300\" height=\"200\" class=\"myIMG\">
		</a>
		<div class=\"desc3\">".$book_title."</div>
		<div class=\"desc33\">".$book_author."</div>
		</div>";
		}
	?>
	
	</div>
	
	<!-- BUTTON -->
	<div class="">
		<!--<a href="#"><i class="icon-arrow-up icon-large" style="color: #000000;" id="fixedbutton"></i></a> -->
		<a style="cursor: url, default"><img src="sliki/36.png" id="fixedbutton"></a>
	</div>
			
	</div>			
			
			
<?php include('footer.php') ?>