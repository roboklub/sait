<?php
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
      foreach ($pageInfo['css'] as $key => $value) {
        echo "  <link rel=\"stylesheet\" href=\"".$value."\" />\n";
      }
    }
  ?>
</head>
<body>
