
<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<html>



<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">



<body id="myPage">
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>ЦЕНОВНИК</h2>
    <p>Одберете пакет кој највеќе ви одговара</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Пакет Ѕ</p>
        </li>
        <li class="w3-padding-16"><b>3</b> месеци</li>
        <li class="w3-padding-16">Читална: <b>2</b> часа дневно</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"> 400 денари</h2>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Пакет М</p>
        </li>
        <li class="w3-padding-16"><b>6</b> месеци</li>
        <li class="w3-padding-16">Читална: <b>4</b> часа дневно</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"> 700 денари</h2>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Пакет L</p>
        </li>
        <li class="w3-padding-16"><b>12</b> месеци</li>
        <li class="w3-padding-16">Читална: <b>8</b> часа дневно</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"> 1000 денари</h2>
        </li>
      </ul>
    </div>
</div>

<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Контакт</span></div>
      <h3>Адреса</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;Скопје, МК</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;+389 2 222 5555</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>&nbsp;&nbsp;mail@mail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Име</label>
        <input class="w3-input" type="text" name="Name" required="">
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required="">
      </div>
      <div class="w3-section">      
        <label>Порака</label>
        <textarea rows="6" class="w3-input" type="text" name="Message" required=""></textarea>
      </div>  
      <input class="w3-check" type="checkbox" checked="" name="Like">
      <label>Ми се допаѓа!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Испрати</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php include("footer.php") ?>