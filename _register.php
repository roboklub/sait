<?php
  $pageInfo = [
    'pageName' => 'Регистрирай се', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css','css/register.css', 'css/login.css'], //this is css urls or paths, don't make keys just add one and then ','
  ];

  include 'templates/classic_header.php'; // include the header file becoause the DRY(Don't Repeat Yourself) convention and its easy to change things
  include 'templates/classic_navigation_bar.php'; // include the global navigation bar
?><div style="display: block; height: 100px;">
</div>
<div class="content">
  <h2><?php echo $pageInfo['pageName']; //if you change the page name it automaticaly change the h2 content?></h2>
  <form class="login_form" method="post">
    <input type="text" name="username" placeholder="Потребителско име.."  />
    <input type="text" name="email" placeholder="Имейл адрес.."  />
    <input type="text" name="first_password" placeholder="Парола.."  />
    <input type="password" name="second_password" placeholder="Повтори парола.." /><br>
    <input type="submit" name="submitBtn" value="Регистирай ме" />
    <p class="register_link">
      <a href="#">Вход</a>
    </p>
  </form>
</div>
<?php
  if ($_POST && isset($_POST['submitBtn'])) {
    $username        = trim($_POST['username']);
    $email           = trim($_POST['email']);
    $first_password  = trim($_POST['username']);
    $second_password = trim($_POST['username']);
    $error           = array();
    /*
      trim function delete the whitespace in the begining and the end of the post information
    */

    echo '<pre>'. print_r($_POST ,true) .'</pre>';

    if (condition) {
      # code...
    }
  }

  include 'templates/classic_footer.php'; // include the global footer
?>
