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
				

					<div class="alert alert-info"><Strong> СИТЕ КНИГИ</strong>&nbsp;
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
	<a target="_blank" href="knigi/kniga1.pdf">
		<img src="LMS/gallery1.jpg" alt="Fjords" width="300" height="200" class="myIMG">
	</a>
	<div class="desc3">11 Октомври</div>
	<div class="desc33">Литературен зборник, 1948</div>
	</div>

	<div class="gallery3">
		<a target="_blank" href="knigi/kniga2.pdf">
			<img src="LMS/gallery2.jpg" alt="Forest" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Oд борбата, народни песни, 1947</div>
		<div class="desc33">Блаже Конески, собрал </div>
	</div>

	<div class="gallery3">
		<a target="_blank" href="knigi/kniga3.pdf">
			<img src="LMS/gallery3.jpg" alt="Northern Lights" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Ај погоди, 2011</div>
		<div class="desc33">Васил Мукаетов</div>
	</div>

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
		<a target="_blank" href="knigi/kniga6.pdf">
			<img src="LMS/gallery6.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Бегалци, 1949</div>
		<div class="desc33">Јован Бошковски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga7.pdf">
			<img src="LMS/gallery7.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Вардар, 1958</div>
		<div class="desc33">Анте Поповски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga8.pdf">
			<img src="LMS/gallery8.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Виорно знаме, 1950</div>
		<div class="desc33">Волче Наумчевски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga9.pdf">
			<img src="LMS/gallery9.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Гладна кокошка просо сонуе, 1945</div>
		<div class="desc33">Блаже Конески</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga10.pdf">
			<img src="LMS/gallery10.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Денови, 1939</div>
		<div class="desc33">Коста Рацин</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga11.pdf">
			<img src="LMS/gallery11.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">За новата пролет, 1946</div>
		<div class="desc33">Гого Ивановски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga12.pdf">
			<img src="LMS/gallery12.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Записи, 1974</div>
		<div class="desc33">Блаже Конески</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga13.pdf">
			<img src="LMS/gallery13.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Лебедова песна, 1982</div>
		<div class="desc33">Адем Гајтани</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga14.pdf">
			<img src="LMS/gallery14.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Македонска лирика, 1950</div>
		<div class="desc33">Македонски писатели</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga15.pdf">
			<img src="LMS/gallery15.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Македонски правопис</div>
		<div class="desc33">Изработено од комисијата за јазик и литература</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga16.pdf">
			<img src="LMS/gallery16.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Милион Маченици, 1940</div>
		<div class="desc33">Ристо Крле</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga17.pdf">
			<img src="LMS/gallery17.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Милион џинои, 1948</div>
		<div class="desc33">Славко Јаневски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga18.pdf">
			<img src="LMS/gallery18.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Мироносници, 1965</div>
		<div class="desc33">Богомил Ѓузел</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga19.pdf">
			<img src="LMS/gallery19.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Мое село, 1950</div>
		<div class="desc33">Ванчо Николески</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga20.pdf">
			<img src="LMS/gallery20.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">На истокот,  1944</div>
		<div class="desc33">Венко Марковски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga21.pdf">
			<img src="LMS/gallery21.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Непокор , 1964</div>
		<div class="desc33">Анте Поповски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga22.pdf">
			<img src="LMS/gallery22.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Огинот, 1945</div>
		<div class="desc33">Венко Марковски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga23.pdf">
			<img src="LMS/gallery23.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Оковано јаболко, 1978</div>
		<div class="desc33">Славко Јаневски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga24.pdf">
			<img src="LMS/gallery24.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Парите се отепувачка, 1938</div>
		<div class="desc33">Ристо Крле</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga25.pdf">
			<img src="LMS/gallery25.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Песни, 1946</div>
		<div class="desc33">Коста С. Рацин</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga26.pdf">
			<img src="LMS/gallery26.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Песни, 1948</div>
		<div class="desc33">Славко Јаневски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga27.pdf">
			<img src="LMS/gallery27.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Песни, 1953</div>
		<div class="desc33">Блаже Конески</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga28.pdf">
			<img src="LMS/gallery28.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Печалбари, драма во 4 чина, 1936</div>
		<div class="desc33">Антон Панов</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga29.pdf">
			<img src="LMS/gallery29.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Слеј се со тишината, 1955</div>
		<div class="desc33">Ацо Шопов</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="#">
			<img src="LMS/gallery30.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Творби</div>
		<div class="desc33">Константин Миладинов</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga31.pdf">
			<img src="LMS/gallery31.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Тиквешка легенда, 1948</div>
		<div class="desc33">Лазо Каровски</div>
	</div>
	
	<div class="gallery3">
		<a target="_blank" href="knigi/kniga32.pdf">
			<img src="LMS/gallery32.jpg" alt="Mountains" width="300" height="200" class="myIMG">
		</a>
		<div class="desc3">Тутуноберачите, 1939</div>
		<div class="desc33">Коста Рацин</div>
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
		$user_query=mysqli_query($mysqli,"select * from ebooks where status != 'Archive'")or die(mysql_error());									
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