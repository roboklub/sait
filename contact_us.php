<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Пишете ни</title>
<?php
  $pageInfo = [
    'pageName' => 'Пишете ни', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css'], //this is css urls or paths, don't make keys just add one and then ','
  ];

  include 'templates/classic_header.php'; // include the header file becoause the DRY(Don't Repeat Yourself) convention and its easy to change things
  include 'templates/classic_navigation_bar.php'; // include the global navigation bar
  
?>
<link rel="stylesheet" href="css/e-mail.css" />
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

<div class="email_form" id="e-mail">
<h3> Пишете ни: </h3>
<form method="POST" enctype='multipart/form-data' >
<label for="name">Вашето име:</label>
<input type="text" id="name" name="name"/>
<label for="email">E-mail за връзка:</label>
<input type="email" id="email" name="from"/>
<label for="For">Относно:</label>
<input type="text" id="For" name="for" />
<label for="comment">Вашето съобщение:</label>
<textarea  name="comment" maxlength="1000" cols="25" rows="6" name="comment" ></textarea>
 <!-- <div class="g-recaptcha" data-sitekey="6LeRGw0UAAAAAAkljbosvSBosn_l-uCtvPWWgtes"></div> -->
 <input class="clickable" type="submit" name="email_submit" value="Изпрати"</input>
</form>
</div>
</body>
</html>
<?php
$name=trim($_POST['name']);
$sender_email=trim($_POST['from']);
$for=trim($_POST['For']);
//echo "<pre>".print_r($_POST ,true)."</pre>";
$headers .= 'From: <' .$sender_email. "> \r\n";
mail("rado__99@abv.bg",$for,$msg."\n Изпратил:".$name,$headers);
include 'templates/classic_footer.php'; //include the global footer
