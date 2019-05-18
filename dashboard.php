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
<div>
  <img class="mySlides" src="sliki/pocetna/picture1.jpg" style="width:100%;height:1000px"  >
  <img class="mySlides" src="sliki/pocetna/picture2.jpg" style="width:100%;height:1000px" >
  <img class="mySlides" src="sliki/pocetna/picture3.jpg" style="width:100%;height:1000px" >
  <img class="mySlides" src="sliki/pocetna/picture4.jpg" style="width:100%;height:1000px" >
</div>

</br>
<div class="w3-row">
<div class="w3-third" style="text-align:center">
<hr>НАСТАНИ</hr>

  <p>САЕМОТ НА КНИГАТА како една од најзначајните културни манифестации во земјата обезбедува најголема концентрација на дела од домашни и странски автори, современи и класични литературни дела, стручна научна и белетристичка литература, учебници и училишни прирачници, енциклопедии и дела од областа на културата и уметноста.</p>
  <a href="http://eragrupa.mk/exhibitions.aspx?exh=1&sub=Saem_na_Kniga&menu=6&tip=3&id=Saemi"><img  src="sliki/pocetna/saem.png" style="width:400px"/></a>
  
</div>
<div class="w3-third" style="text-align:center">
  
  <div>
  <hr>СОРАБОТНИЦИ<hr>
  <table>
  <tr>
  <td><a href="http://www.1000knigi.mon.gov.mk/" target="_blank"><img src="sliki/pocetna/s1.png"></a></td>
  <td><a href="http://www.nauka.mon.gov.mk/index.php?lang=mk" target="_blank"><img src="sliki/pocetna/s2.png"></a></td>
  </tr>
  <tr>
  <td><a href="http://www.e-ucebnici.mon.gov.mk/" target="_blank"><img src="sliki/pocetna/s3.png"></a></td>
  <td><a href="http://bro.gov.mk/" target="_blank"><img src="sliki/pocetna/s4.png"></a></td>
  </tr>
  </table>
  </div>
  
</div>
<div class="w3-third" style="text-align:center">
<div style="margin:0 auto;width:50%" class="jquery-calendar"></div>
</div>
</div>
</br>


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
<?php include('footer.php') ?>