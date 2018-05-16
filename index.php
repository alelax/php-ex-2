<!--
   Stampare una stringa verde se la
   variabile password passata in GET è
   uguale a “Boolean”, altrimenti stampare
   una stringa rossa.
-->


<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <title>Check password</title>
   </head>
   <body>

      <?php
         $pwd = $_GET['password'];
         $output = 'Password';
         $response = '';
         $class = '';

         if ($pwd == 'boolean') {
            $response = ' is correct'; ?>
            <div class="correct">

      <?php }  else {
            $response = ' is wrong';  ?>
            <div class="wrong">
      <?php } ?>

       <?php echo $output . $response ?></div>
   </body>
</html>
