<?php
  $num_to_guess = 42;
  $message = "";
  
  $lastGuess = "";
  $guess = 0;

  if ( ! isset( $_POST['guess'] ) ) {
         $message = "Hello!";
  } else if ( $_POST['guess'] > $num_to_guess ) {
         $message = $_POST['guess'] . " is bigger!";
		 
  } else if ( $_POST['guess'] < $num_to_guess ) {
         $message = $_POST['guess'] . " is smaller!";
		 
  } else { 
         $message = "OK!";
		
  }
  
  if ( isset( $_POST['guess'] ) ) {
         $lastGuess = $_POST['lastGuess'] . ' ' . $_POST['guess'];
	  $guess = (int) $_POST['guess'];
 }
  
  
?>





<html>
 <head>
  <title>Game</title>
 </head>
 <body>
  <div>
   <h1>
    <?php print $message ?>
   </h1>


   <form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
    <p> 
     <input type="hidden" name="lastGuess" 
            value="<?php print $lastGuess?>" />
     Input number: 	 <input type="text" name="guess" 
			value="<?php print $guess?>"/>
     <input type="submit" value="Input" /><br/>
     <br>

     <?php print $lastGuess . ' '; ?> <br />
    </p>
   </form>
  </div>
 </body>
</html>