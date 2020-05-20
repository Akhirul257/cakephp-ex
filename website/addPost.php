<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/reset.css">

</head>

<body >
  <div class="content">
  <h1>Post</h1>
  <b>First</b><br><hr>
  <p>this is my first blog<p>

  <b>This Blog</b><br><hr>
  <p>This blog is created with html, css, Js and Php. <p>
  </div>
<div class="content">
<h2>Your comment is posted </h2>
<b><?php echo $_POST["fname"]; ?></b><br><hr>
 <p><?php echo $_POST["message"]; ?><p>


<?php
  echo "<br><a href='logout.php'><input type=button class=button value=logout name=logout></a>";

?>
</div>
</body>
</html>
