<?php
  $pageInfo = [
    'pageName' => 'Начало', //this is the current page name
    'favicon' => 'img/UKTC.png', //this is the url or path for the favicon
    'css' => ['css/style.css'], //this is css urls or paths, don't make keys just add one and then ','
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
            echo "<img class=\"user_picture\" src=\"".$fetching_user_pic['user_profile_pic']."\" ";
          }
    ?>
  </div>
  <div class="profile_picture_functions">
    <h2>Информация</h2>
    <p class="username_text">
      Потребителско име<?php echo " : <span>".$_SESSION['isLogged']['username']."</span>"; ?>
    </p>
    <p class="gender">
      Пол: <?php if (!$fetching_user_pic['gender'] == '') {
        echo $fetching_user_pic['gender'];
      }else{
        echo 'няма';
      } ?>
    </p>
    <p>
      е-майл:
    </p>
    <p class="actualize_information">
      <a href="">Промени</a>
    </p>
  </div>

  <div class="clearFix"></div>
</div>
<?php
}
}
  include 'templates/classic_footer.php'; // include the global footer
?>
