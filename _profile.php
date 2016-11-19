<?php
  $pageInfo = [
    'pageName' => 'Профил', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css'], //this is css urls or paths, don't make keys just add one and then ','
    'script' => ["https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"],//this is javascript urls or paths, don't make keys just add one and then ','
  ];

  include 'templates/classic_header.php'; // include the header file becoause the DRY(Don't Repeat Yourself) convention and its easy to change things
  include 'templates/classic_navigation_bar.php'; // include the global navigation bar
?>
<div class="profile_content">
  <div class="profile_picture">

    <?php
      if ($user_picture = mysqli_query($connection, 'SELECT * FROM `members` WHERE user_name = \''.$_SESSION['isLogged']['username'].'\'' )) {
        while ($fetching_user_pic = mysqli_fetch_assoc($user_picture)) {


          if ($fetching_user_pic['user_profile_pic'] == 'none') {
            echo "<img class=\"default_user_picture\" src=\"img/defaultIcon.png\" /> ";
          }else {
            echo "<img class=\"user_picture\" src=\"".$fetching_user_pic['user_profile_pic']."\"> ";
          }
    ?>
  </div>

  <div class="profile_picture_functions">
    <h2>Информация</h2>
    <p class="username_text">
      Потребителско име<?php echo " : <span>".$_SESSION['isLogged']['username']."</span>"; ?>
    </p>
    <p class="gender">
      Пол:
      <?php
        if (!$fetching_user_pic['gender'] == '') {
          echo $fetching_user_pic['gender'];
        }else{
          echo 'няма';
        }
      ?>
    </p>
    <p>
      е-майл: dsaddsadsasdsa<?php echo $fetching_user_pic['user_email']; ?>
    </p>
    <p>
      Постове:
    </p>
    <p class="actualize_information">
      <a href="_profile.php?modify=true" class="clickable">Промени</a>
    </p>
  </div>

  <div class="clearFix"></div>
</div>
<?php
  }
}
  if ($_GET['modify'] == 'true') {
    ?>
      <div class="update_info_close_btn">

        <div id="close">
          <a id="close" href="javascript:void(0)" onclick="show('update_info','close');">Затвори</a>
        </div>
      </div>
      <div class="update_info" id="update_info">
        <h3>Промени информацията</h3>
        <form method="post" enctype='multipart/form-data'>
          <label for="username_input">Ново потребителско име: </label>
          <input id="username_input" type="text" name="username"  />

          <label for="file_input">Смени профилната снимка:</label>
          <input id="file_input" type="file" name="user_pic" value="">

          <label for="email_input">Нов имейл адрес:</label>
          <input id="email_input" type="email" name="email" />

          <input type="hidden" name="current_username" value="<?php echo $_SESSION['isLogged']['username'] ?>">

          <label for="gender_select">Смени пол:</label>
          <select id="gender_select" name="gender">
            <option value="none">Пол:</option>
            <option value="1">Мъж</option>
            <option value="2">Жена</option>
            <option value="3">Други</option>
          </select>

          <label for="password_input">Потвърди парола:</label>
          <input id="password_input" type="password" name="password"  />

          <input class="clickable" type="submit" name="submitBtn" value="Запази">
        </form>
      </div>
    <?php

    if($_POST){
      $new_username = trim($_POST['username']);
      $new_username = mysqli_real_escape_string($connection ,$new_username);

      $new_email    = trim($_POST['email']);
      $new_email    = mysqli_real_escape_string($connection, $new_email);

      $new_gender   = trim($_POST['gender']);
      $new_gender   = mysqli_real_escape_string($connection, $new_gender);

      $target_Path = "";
      $target_Path = $target_Path.basename($_FILES['user_pic']['name']);
      $move_files  = move_uploaded_file($_FILES['user_pic']['tmp_name'], $target_Path);


      if (!$move_files) {
        echo $target_Path;
        echo "ERROR ";
      }
    }

    echo "<pre>".print_r($_POST ,true)."</pre>";
  }


  include 'templates/classic_footer.php'; // include the global footer
?>
