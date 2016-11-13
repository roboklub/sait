<?php
  $pageInfo = [
    'pageName' => 'Начало', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css','css/popup.css'], //this is css urls or paths, don't make keys just add one and then ','
  ];

  include 'templates/classic_header.php'; // include the header file becoause the DRY(Don't Repeat Yourself) convention and its easy to change things
  include 'templates/classic_navigation_bar.php'; // include the global navigation bar
?>
<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style><br><br><br><br><br>
<h3>Клубът по роботика беше основан в края на учебната година 2015 година, благодарение на подкрепа от училището ПГ по КТС гр. Правец и съвместната работа на преподавателите: Цветомир Георгиев, Венцислав Начев, Симеон Цветанов. Клубът се състои от ученици, които изявяват желание и имат интерес към роботиката и миктоконтролерите, които ни заобикалят във всекидневието ни.<p>
Чрез клуба те се учат да програмират и управляват машини, като също така изграждат хардуерната и софтуерната част. Повече информация за училището може да намерите на сайта: <a href="http://uktc-bg.com">http://uktc-bg.com</a></p><p>
Към момента клубът си има собствена зала с обородудване за няколко хиляди, което включва 3D принтер, 2 мощни работни станции за 3D дизайн, и друго необходимо оборудване, като има още какво да се желае, и се стараем с времето да запълним тези пропуски, но са нужни и външни спонсори за целта.</p></h3>
<br><br><br>
<div class="popup" onclick="myFunction()">Click me to toggle the popup!
  <span class="popuptext" id="myPopup">A Simple Popup!</span>
</div>

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById('myPopup');
    popup.classList.toggle('show');
}
</script>
<?php
  include 'templates/classic_footer.php'; // include the global footer
?>
