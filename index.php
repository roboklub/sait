<head>
<?php
  $pageInfo = [
    'pageName' => 'Начало', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css'], //this is css urls or paths, don't make keys just add one and then ','
  ];

  include 'templates/classic_header.php'; // include the header file becoause the DRY(Don't Repeat Yourself) convention and its easy to change things
  include 'templates/classic_navigation_bar.php'; // include the global navigation bar
  include 'galleries/indexgallery/gallery.php';
  
?>
<body>

<h3>Клубът по роботика беше основан в края на учебната година 2015 година, благодарение на подкрепа от училището ПГ по КТС гр. Правец и съвместната работа на преподавателите: Цветомир Георгиев, Венцислав Начев, Симеон Цветанов. Клубът се състои от ученици, които изявяват желание и имат интерес към роботиката и миктоконтролерите, които ни заобикалят във всекидневието ни.<p>
Чрез клуба те се учат да програмират и управляват машини, като също така изграждат хардуерната и софтуерната част. Повече информация за училището може да намерите на сайта: <a href="http://uktc-bg.com">http://uktc-bg.com</a></p><p>
Към момента клубът си има собствена зала с обородудване за няколко хиляди, което включва 3D принтер, 2 мощни работни станции за 3D дизайн, и друго необходимо оборудване, като има още какво да се желае, и се стараем с времето да запълним тези пропуски, но са нужни и външни спонсори за целта.</p></h3>
<?php
  include 'templates/classic_footer.php'; // include the global footer
?>
</body>