<?php
  $pageInfo = [
    'pageName' => 'Влизане', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css','css/login.css'], //this is css urls or paths, don't make keys just add one and then ','
  ];

  include 'templates/classic_header.php'; // include the header file becoause the DRY(Don't Repeat Yourself) convention and its easy to change things
  include 'templates/classic_navigation_bar.php'; // include the global navigation bar
?><div style="display: block; height: 100px;">
</div>
<div class="content">
  <h2><?php echo $pageInfo['pageName']; //if you change the page name it automaticaly change the h2 content?></h2>
  <form class="login_form" method="post">
    <input type="text" name="name" placeholder="Потребителско име.."  />
    <input type="password" name="name" placeholder="Парола.." /><br>
    <input type="submit" name="name" value="Влизане" />
    <p class="register_link">
      <a href="_register.php">Регистрирай се</a>
    </p>
  </form>
</div>
<?php
  include 'templates/classic_footer.php'; // include the global footer
?>
