<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php  
include('dbcon.php');
require_once('librarian/PtcDebug.php');
$_GET['debug']=true;        // turn on the debug
//$_GET['debug_off']=true;    // turn off debug
PtcDebug::load();
?>
<html>
<head>
	<style>
		.decorated{
			overflow: hidden;
			text-align: center;
		}
		.decorated > span{
			position: relative;
			display: inline-block;
		}
		.decorated > span:before, .decorated > span:after{
			content: '';
			position: absolute;
			top: 50%;
			border-bottom: 2px solid;
			width: 592px; /* half of limiter */
			margin: 0 20px;
		}
		.decorated > span:before{
			right: 100%;
		}
		.decorated > span:after{
			left: 100%;
		}
		
		.boldirano{
			padding: 5px;
			text-align: center;
			font-weight: bold;
			font-size: 20px;
		}
	</style>
</head>
<body>
<div class="container"> 
<div class="w3-row">
		<br>
		<br>
		<br>
		<h1 class="decorated"><span>Настани</span></h1>
		<br>
		<br>

</div>
<!--<div class="w3-row"> -->

	<?php
	//$user_query=mysqli_query($mysqli,"select * from events where status != 'Archive'")or die(mysql_error());									
	$user_query = mysqli_query($mysqli,"SELECT * FROM events where status != 'Archive' ORDER BY event_date DESC")or die(mysql_error());
		while($row=mysqli_fetch_array($user_query)){
		$id=$row['event_id'];  
        $event_name=$row['event_name']; 
        $event_dscr=$row['event_dscr'];		  
		$img_path=$row['img_path'];
		$img_caption=$row['img_caption'];
		$event_date=$row['event_date'];
		$date_added=$row['date_added'];

	echo
	"<div class=\"w3-quarter\" style=\"\">
		<a rel=\"tooltip\"  id=\"".$id."\"  href=\"#nastani_modal".$id."\" data-toggle=\"modal\">
		<div  style=\"width: 90%; height: 600px; margin:auto; position:relative;  overflow:hidden;  \" >
					<img src=\"librarian/".$img_path."\" alt=\"Mountains\" style=\"width:100%; height: 250px;\" >
				<div class=\"boldirano\">".$event_name."</div>
				<div class=\"desc33\" style=\"\"> ".
					$event_dscr

				."</div>
		</div>
		</a>";
		include('nastani_modal.php');
		
	echo "<br></div>";
		}
	?>
	
	<!--
	<div class="w3-quarter">
		
		<div  style="width: 90%; height: 600px; margin:auto; position:relative;">
					<img src="sliki/pocetna/pesna-na-ridot.jpg" alt="Mountains" style="width:100%; height: 250px;">
				<div class="boldirano">Песна на ридот</div>
				<div class="desc33">
				Промоција на книгата „ПЕСНА НА РИДОТ“ од ГОРДАНА МИХАИЛОВА БОШНАКОСКА добитник на наградата „Ацо Шопов“ на ДПМ за 2016 година

промотори: Иван Чаповски, Раде Силјан
актер: Томе Витанов

Промоцијата ќе се одржи на 7 јуни (среда) 2017 година
во спомен-собата на Миладиновци, со почеток во 12.00 часот.
				</div>
		</div>
		
	</div>
	
	<div class="w3-quarter">
		<div  style="width: 90%; height: 600px; margin:auto; position:relative;" >
					<img src="sliki/pocetna/i-po-sto-pati.jpg" alt="Mountains" style="width:100%; height: 250px;" >
				</a>
				<div class="boldirano">Промоција на книга - 12-04-2017</div>
				<div class="desc33">
				„И по сто пати“ од Александар Поповски, добитник на наградата за најдобра книга за деца и младинци „Ванчо Николески“ на ДПМ за 2016 година. Промотор: Виолта Танчева Златева
				</div>
		</div>	
	</div>
	
	<div class="w3-quarter">
		<div  style="width: 90%; height: 600px; margin:auto; position:relative;" >
					<img src="sliki/pocetna/citalna.png" alt="Mountains" style="width:100%; height: 250px;" >
				
				<div class="boldirano">Известување - 12-04-2017</div>
				<div class="desc33">
НА 14.04 (ПЕТОК) И 15.04 (САБОТА) ЧИТАЛНИТЕ ВО БИБЛИОТЕКАТА ЌЕ БИДАТ ОТВОРЕНИ ЗА СИТЕ КОРИСНИЦИ.		По повод Велигденските празници, Библиотеката нема да работи на 16.04. (недела) и 17.04 (понеделник).

Одделите белетристика, научниот, детскиот и периодика нема да работат за претстојниот празник 14,15 и 17 април (петок,сабота и понеделник).	
				</div>
		</div>	
	</div> -->

	
	
<!-- </div>  -->
        
		
<div class="w3-row">
		
		<br>
		<br>
		<br>

</div> 

<div class="w3-row" >
</div>



</div>

</body>
</html>




<?php include('footer.php') ?>