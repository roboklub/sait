<?php
  error_reporting(E_ALL ^ E_NOTICE);//stop the notices from php
  $arr = $_SESSION['isLogged'];
 ?>
<header>
  <div class="header_content">
    <div id="logo_content">
      <h1><a href="index.php">Robo Club</a></h1>
    </div>
    <nav id="main_navigation">
      <ul>
        <li>
          <a href="index.php">Начало</a>
        </li><li>
          <a href="#">Постове</a>
        </li> <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()" >За нас</a>
          <div class="dropdown-content" id="myDropdown">
            <a href="team.php">Екип</a>
            <a href="portfolio.php">Портфолио</a>
            <a href="contact_us.php">Пишете ни</a>
          </div>
        </li>
        <?php if (is_array($arr)){?>
          <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn1" onclick="myFunction1()" ><?php echo $arr['username']?></a>
            <div class="dropdown-content1" id="myDropdown1">
              <a href="_profile.php">Моят профил</a>
              <a href="_destroy.php">Изход</a>
            </div>
          </li>
        <?php
        }else{
        ?>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn1" onclick="myFunction1()" >Моят профил</a>
          <div class="dropdown-content1" id="myDropdown1">
            <a href="_login.php">Влизане</a>
            <a href="_register.php">Регистрирай се</a>
          </div>
        </li>
        <?php } ?>
      </ul>
    </nav>
    <div class="clearFix"></div>
  </div>
</header>
