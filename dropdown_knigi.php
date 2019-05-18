<?php  
include('dbcon.php');
require_once('librarian/PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
?>
					<!--
					<li>		
					<a href="knigi.php"  data-toggle="dropdown" ><i class="icon-file icon-large"></i> Transactions</a>
						<ul class="dropdown-menu" style="right: 0; left: auto;">
							<li><a href="#"><i class="icon-pencil icon-large"></i>&nbsp;Borrow</a></li>
							<li><a href="#"><i class="icon-cog icon-large"></i>&nbsp;View Returned Books</a></li>
							<li><a href="#"><i class="icon-reorder icon-large"></i>&nbsp;View Borrowed Books</a></li>
						</ul>
					</li>   -->
					
					<!-- <div class="dropdown">
						<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
						<span class="caret"></span></button> 
						<ul class="dropdown-menu">
							<li><a href="#">HTML</a></li>
							<li><a href="#">CSS</a></li>
							<li><a href="#">JavaScript</a></li>
						</ul>
					</div>  -->
									
					<!--
					<li>
						<a href="siteknigi.php"  class="dropdown-toggle" data-toggle="dropdown" data-placement="bottom"><i class="icon-book icon-large"></i> Е-книги
						<!--<span class="caret"></span> </a> 
						<form action="head.php" method="POST">
						<select name="kategorija">
						<ul class="dropdown-menu" style="right: 150px; left: auto;" >
						
							<li><option value="СИТЕ КНИГИ"><a href="siteknigi.php">Сите книги <span class="badge">34</span></a></option></li>

							<li><option value="ДЕТСКА ЛИТЕРАТУРА"><li><a href="detstkaliteratura.php">Детстка литература</a></option></li>
							<li><option value="ДРАМИ"><a href="drami.php">Драми</a></option></li>
							<li><option value="ИСТОРИЈА"><a href="istorija.php">Историја</a></option></li>
							<li><option value="ПОЕЗИЈА"><a href="poezija.php">Поезија</a></option></li>
							<li><option value="РАСКАЗИ"><a href="raskazi.php">Раскази</a></option></li>
							</select>
						</ul>
						</select>
						</form>
					</li>  
					
					-->
					<?php
							$user_query=mysqli_query($mysqli,"select * from ebooks where status != 'Archive'")or die(mysql_error());									
							$num_rows=0;
							while($row=mysqli_fetch_array($user_query)){
							$num_rows+=1;
							}
					?>
					<li>
						<a href="siteknigi.php"  class="dropdown-toggle" data-toggle="dropdown" data-placement="bottom"><i class="icon-book icon-large"></i> Е-книги
						<!--<span class="caret"></span>--> </a> 
						<ul class="dropdown-menu" style="right: 90px; left: auto;">
							<li><a href="siteknigi.php">Сите книги <span class="badge"><?php echo $num_rows;?></span></a></li>
							<li><div style="height:1px; background-color: #e5e5e5; width:100%;"></div></li>
							<li><a href="detstkaliteratura.php">Детстка литература</a></li>
							<li><a href="drami.php">Драми</a></li>
							<li><a href="istorija.php">Историја</a></li>
							<li><a href="poezija.php">Поезија</a></li>
							<li><a href="raskazi.php">Раскази</a></li>
						</ul>
					</li> 