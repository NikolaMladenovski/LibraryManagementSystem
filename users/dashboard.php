<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php include('navbar_dashboard.php'); ?>
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

  <img class="mySlides" src="sliki/pocetna/picture1.jpg" style="width:100%" >
  <img class="mySlides" src="sliki/pocetna/picture2.jpg" style="width:100%" >
  <img class="mySlides" src="sliki/pocetna/picture3.jpg" style="width:100%" >
  <img class="mySlides" src="sliki/pocetna/picture4.jpg" style="width:100%" >
  
<!--

<div class="w3-row">
<div class="w3-twothird" style="border:1px solid red;text-align:center">
  <p>САЕМОТ НА КНИГАТА како една од најзначајните културни манифестации во земјата обезбедува најголема концентрација на дела од домашни и странски автори, современи и класични литературни дела, стручна научна и белетристичка литература, учебници и училишни прирачници, енциклопедии и дела од областа на културата и уметноста.</p>
  <a href="http://eragrupa.mk/exhibitions.aspx?exh=1&sub=Saem_na_Kniga&menu=6&tip=3&id=Saemi"><img  src="sliki/pocetna/saem.png"/></a>
</div>

<div class="w3-third" style="border:1px solid green;text-align:center">
  <div style="margin:0 auto;width:50%" class="jquery-calendar"></div>
</div>

</div>

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