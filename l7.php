<?php
  $num_to_guess = 42;
  $message = "";

  if ( ! isset( $_POST['guess'] ) ) {
       $message = "Hello!";
  } else if ( $_POST['guess'] > $num_to_guess ) {
       $message = $_POST['guess'] . " много!";
  } else if ( $_POST['guess'] < $num_to_guess ) {
       $message = $_POST['guess'] . " мало!";
  } else { 
       $message = "Ok!";
  }

?>

<html>
 <head>
  <title>l7.PHP-сценарий,  угадывающий число </title>
 </head>
 <body>
  <h1>
   <?php print $message ?>
  </h1>

  <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
   <p>Введите число:
      <input type="text" name="guess" />
      <input type="submit" value="Input" />
   </p>
  </form>
 </body>
</html>