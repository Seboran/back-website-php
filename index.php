<?php

$title = "My first php website";
$customText = "This is my custom text";
$variable = date('s') % 2 == 0

?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo $title; ?></title>
  </head>
  <body>
  <?php 
  if ($variable) {
    echo "<h1>$title</h1>";
  }
   ?>
    <div>

      <p><?php echo '<strong>' . $customText . '</strong>'; ?></p>
      <p>Today we are the <?php echo date('d/m/Y h:i:s'); ?></p>
    </div>
  </body>
</html>