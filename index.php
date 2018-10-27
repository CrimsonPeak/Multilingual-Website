<?php 
  session_start();
  include 'languages/langConfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $lang['title'] ?></title>
	<meta charset="utf-8">
</head>

<body>
  <!-- Gets the text of the chosen language -->
  <h1><?php echo $lang['title'] ?></h1>

  <!-- Sets the chosen language -->
  <p><a href="?lang=tr">TR</a> / <a href="?lang=de">DE</a> / <a href="?lang=en">EN</a></p>
</body>

</html> 