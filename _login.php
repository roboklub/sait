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
    <input type="text" name="username" placeholder="Потребителско име.."  />
    <input type="password" name="password" placeholder="Парола.." /><br>
    <input type="submit" name="submitBtn" value="Влизане" />
    <p class="register_link">
      <a href="_register.php">Регистрирай се</a>
    </p>
  </form>
</div>
<?php
  if ($_POST && isset($_POST['submitBtn']) && $connection) {
    $username      = trim($_POST['username']);
    $username      = mysqli_real_escape_string($connection, $username);
    $password      = trim($_POST['password']);
    $password      = mysqli_real_escape_string($connection, $password);
    $get_user_data = 'SELECT `username`, `password`, `e-mail` FROM `members` WHERE 1';

    if (mb_strlen($username) < 1 || mb_strlen($password) < 1 ) {
      echo "<div class=\"error fade\">Потребителското име или парола са невалидни</div>";
    }

   // get users data from the database and then the data get fetch and if the username or password are valid he will be redirected to other page





    if ($user_data = mysqli_query($connection, $get_user_data)) {
      while ($fetch_data = mysqli_fetch_assoc($user_data)) {
        echo '<pre>'. print_r($fetch_data ,true) .'</pre>';
      }
    }

  }


  include 'templates/classic_footer.php'; // include the global footer
?>
