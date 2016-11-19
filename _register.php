<?php
  $pageInfo = [
    'pageName' => 'Регистрирай се', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css','css/register.css', 'css/login.css'], //this is css urls or paths, don't make keys just add one and then ','
    'script' => ["https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"],//this is javascript urls or paths, don't make keys just add one and then ','
  ];
  include 'templates/classic_header.php'; // include the header file because the DRY(Don't Repeat Yourself) convention and its easy to change things
  include 'templates/classic_navigation_bar.php'; // include the global navigation bar
?>
</div>
<div class="content">
  <h2><?php echo $pageInfo['pageName']; //if you change the page name it automaticaly change the h2 content?></h2>
  <form class="login_form" method="post">
    <input type="text" name="username" placeholder="Потребителско име.."  />
    <input type="email" name="email" placeholder="Имейл адрес.."  />
    <input type="password" name="first_password" placeholder="Парола.."  />
    <input type="password" name="second_password" placeholder="Повтори парола.." /><br>
    <input type="submit" name="submitBtn" value="Регистирай ме" />
    <p class="register_link">
      <a href="_login.php">Вход</a>
    </p>
  </form>
</div>
<?php
  if ($_POST && isset($_POST['submitBtn'])) {
    $username        = trim($_POST['username']);
    $email           = trim($_POST['email']);
    $first_password  = trim($_POST['first_password']);
    $second_password = trim($_POST['second_password']);
    $error           = array();


    /*
    *  trim function delete the whitespace in the begining and the end of the post information
      error variable is for collecting the errors from the validation
    */

    if ($first_password == $second_password) {
      $password = $first_password;
    }

    if (mb_strlen($username) < 4) {
      $error[] = 'Потребителското име трябва да е минимум 4 символа.';
    }
if($first_password!=$second_password){
		$error[]='Паролите не съвпадат, моля проверете и опитайте отново';
	}
    if (mb_strlen($first_password) < 6) {
      $error[] = 'Паролата трябва да е минимум 6 символа.';
    }


    if (!count($error) < 1) {
      foreach ($error as $error_value) {
        echo "\t<div class=\"error fade\">".$error_value."</div>\n";
      }
    }else{
      $options        = ['cost' => 16,];
      $username       = mysqli_real_escape_string($connection, $username);
      $email          = mysqli_real_escape_string($connection, $email);
      $password       = mysqli_real_escape_string($connection, $password);
      $password       = password_hash($password, PASSWORD_BCRYPT, $options);
      $insert_into_db = 'INSERT INTO `members`(`user_name`, `user_password`, `user_email`) VALUES (\''.$username.'\',\''.$password.'\', \''.$email.'\')';
      $q              = mysqli_query($connection, $insert_into_db);

      if ($q) {
        echo "<div class=\"success fade\" >Вие се регистрирахте успешно!</div>";
      }

    }

  }

  include 'templates/classic_footer.php'; // include the global footer
?>
