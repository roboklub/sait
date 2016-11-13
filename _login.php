<?php
  $_SESSION['isLogged'] = false;
  $pageInfo = [
    'pageName' => 'Влизане', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css','css/login.css'], //this is css urls or paths, don't make keys just add one and then ','
    'script' => ["https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"],//this is javascript urls or paths, don't make keys just add one and then ','
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
    $error         = array();

    if (mb_strlen($username) < 4 || mb_strlen($password) < 4 ) {
      $error[] = 'Потребителското име или парола са невалидни!';
    }else if(mb_strlen($username) > 64 && mb_strlen($password) > 64){
      $error[] = 'Потребителското име или парола са прекалено дълги!';
    }

   // get users data from the database and then the data get fetch and if the username or password are valid he will be redirected to other page


   if (count($error) < 1) {
     if ($user_data = mysqli_query($connection, $get_user_data)) {
       while ($fetch_data = mysqli_fetch_assoc($user_data)) {
         if ($username == $fetch_data['username'] && $password == password_verify($username, $fetch_data['password'])) {
           $_SESSION['isLogged'] = [
             'username' => $username,
           ];
           header('Location: index.php');
           exit;
         }
       }
     }
   }else{
     foreach ($error as $error_value) {
       echo "\t<div class=\"error fade\">".$error_value."</div>\n";
     }
   }




  }


  include 'templates/classic_footer.php'; // include the global footer
?>
