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
				

					<div class="alert alert-info"><Strong>ДРАМИ </strong>&nbsp;
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
					<a rel="tooltip"  data-placement="bottom"  id="login" href="#">&nbsp;Драми</a>
					</li>
					<li class="divider-vertical"></li>
					<li class="">
					<a rel="tooltip"  data-placement="bottom"  id="login" href="istorija.php">&nbsp;Историја</a>
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
		<a target="_blank" href="knigi/kniga4.pdf">
			<img src="LMS/gallery4.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Антица,  пиеса во 4 чина (7 слики), 1940</div>
		<div class="desc33">Ристо Крле</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga5.pdf">
			<img src="LMS/gallery5.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Бегалка, драма во 5 чина, 1926</div>
		<div class="desc33">Васил Иљоски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga9.pdf">
			<img src="LMS/gallery9.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Гладна кокошка просо сонуе, 1945</div>
		<div class="desc33">Блаже Конески</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga16.pdf">
			<img src="LMS/gallery16.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Милион Маченици, 1940</div>
		<div class="desc33">Ристо Крле</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga24.pdf">
			<img src="LMS/gallery24.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Парите се отепувачка, 1938</div>
		<div class="desc33">Ристо Крле</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga28.pdf">
			<img src="LMS/gallery28.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Печалбари, драма во 4 чина, 1936</div>
		<div class="desc33">Антон Панов</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="#">
			<img src="LMS/gallery33.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Чест, драма во 4 чина, 1953</div>
		<div class="desc33">Васил Иљоски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga34.pdf">
			<img src="LMS/gallery34.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Чорбаџи Теодос, 1937</div>
		<div class="desc33">Васил Иљоски</div>
	</div>
	-->
	<?php
		$user_query=mysqli_query($mysqli,"select * from ebooks where status != 'Archive' and category_name = 'Drami'")or die(mysql_error());									
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