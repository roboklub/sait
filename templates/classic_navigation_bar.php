<?php $_SESSION['isLogged'] = false; ?>

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
          <a href="#">Портфолио</a>
        </li><li>
          <a href="#">За нас</a>
        </li><li>
          <a href="#">Контакти</a>
        </li>
        <?php if (!$_SESSION['isLogged']){?>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Моят профил</a>
          <div class="dropdown-content" id="myDropdown">
            <a href="_login.php">Влизане</a>
            <a href="_register.php">Регистрирай се</a>
          </div>
        </li>
        <?php
        }else{
        ?>
        <li class="dropdown">
          <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Настройки</a>
          <div class="dropdown-content" id="myDropdown">
            <a href="#">Профил</a>
            <a href="#">Изход</a>
          </div>
        </li>
        <?php } ?>
      </ul>
    </nav>
    <div class="clearFix"></div>
  </div>
</header>
