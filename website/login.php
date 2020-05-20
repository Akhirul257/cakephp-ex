<?php
   ob_start();
   session_start();
?>

<html>
<body>
  <?php
           if (isset($_POST['login']) && !empty($_POST['username'])
              && !empty($_POST['password'])) {

              if ($_POST['username'] == 'akhirul' &&
                 $_POST['password'] == '1234') {
                 $_SESSION['valid'] = true;
                 $_SESSION['timeout'] = time();
                 $_SESSION['username'] = 'tutorialspoint';

                 header('Location: addPost.html');

                 echo 'You have entered valid use name and password';
              }else {
                 $msg = 'Wrong username or password';
              }
           }
        ?>
</body>

</html>
