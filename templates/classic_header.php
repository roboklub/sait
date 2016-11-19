<?php
  session_start();
  include 'connection.php';
  mb_strlen('utf8');

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title><?php echo 'Робо клуб - '.$pageInfo['pageName']; ?></title>
  <?php
    if (array_key_exists('favicon',$pageInfo)){
      if (mb_strlen($pageInfo['favicon'] == 0)) {
        echo "<link rel=\"icon\" href=\"".$pageInfo['favicon']."\" />\n";
      }
    }
    if (array_key_exists('css', $pageInfo)) {
      foreach ($pageInfo['css'] as $key => $css_value) {
        echo "  <link rel=\"stylesheet\" href=\"".$css_value."\" />\n";
      }
    }

    if (array_key_exists('script', $pageInfo)) {
      foreach ($pageInfo['script'] as $key => $script_value) {
        echo "  <script src=\"".$script_value."\" ></script>\n";
      }
    }
  ?>
</head>
<body>
