<?php
$num_to_guess = 42;
  $message = "";
  
  $num_tries =0;
  $guess=0;

  if ( ! isset( $_POST['guess'] ) ) {
         $message = "Hello!";
  } else if ( $_POST['guess'] > $num_to_guess ) {
         $message = $_POST['guess'] . " is bigger!";
		 
  } else if ( $_POST['guess'] < $num_to_guess ) {
         $message = $_POST['guess'] . " is smaller!";
		 
  } else { // �����
        header("Location:congrats.html");
       exit;
		
  }
  
  if ( isset( $_POST['guess'] ) ) {
	  $num_tries = (int) $_POST['num_tries'];
	  $guess = (int) $_POST['guess'];
 }
 
 // ������������� ������� header() ��� �������� ���������� ��������
  
?>                                      


<html>
 <head>
  <title>l10 </title>
  </head>
  <body>
    <div>
     <h1>
       <?php print $message ?>
     </h1>
      Attempts done: <?php print $num_tries++ ?> <br/>

     <form method="post" action="<?php print $_SERVER['PHP_SELF'] ?>">
      <p>
        <input type="hidden" name="num_tries" 
              value="<?php print $num_tries?>" />
        Input number: <input type="text" name="guess"
                              value="<?php print $guess?>"/>
        <input type="submit" value="Input" />
      </p>
     </form>
    </div>
 </body>
</html>