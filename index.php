
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<html>
<title>Веб Апликација за Библиотека</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css1.css">
<link rel="stylesheet" href="css2.css">
<link rel="stylesheet" href="css3.css">
<link rel="stylesheet" href="style.css" />
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script type="text/javascript" src="calendar.js"></script>

<body id="myPage">






<!-- Slider -->
<div>
  <img class="mySlides" src="sliki/pocetna/picture1.jpg" style="width:100%;height:1000px"  >
  <img class="mySlides" src="sliki/pocetna/picture2.jpg" style="width:100%;height:1000px" >
  <img class="mySlides" src="sliki/pocetna/picture3.jpg" style="width:100%;height:1000px" >
  <img class="mySlides" src="sliki/pocetna/picture4.jpg" style="width:100%;height:1000px" >
</div>

</br>
<!--
<div class="w3-row">
<div class="w3-third" style="text-align:center">

  
</div>
<div class="w3-third" style="text-align:center">
<div style="margin:0 auto;width:50%" class="jquery-calendar"></div>
</div>
</div>
</br>
-->

<script>
//Slider
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); 
}
</script>



</body>
</html>
<?php include("pochetna_nastani.php")?>
<?php include("e_prochitajte.php") ?>
<?php include('footer.php') ?>