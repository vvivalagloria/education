<html>
  <head>
    <title>Lesson</title>
  </head>

<body>
 <div>
	<?php
  
	echo  "Hello, PHP";
	echo "<BR>";

    echo "IP-address: " . $_SERVER['REMOTE_ADDR'] . "<BR>";
    echo "Browser: " . $_SERVER['HTTP_USER_AGENT'] . "<BR>";
    echo "File address: " . $_SERVER['SCRIPT_FILENAME'] . "<BR>";
    

    foreach ($_SERVER as $key => $value){
        printf();
    }

	?>


 
 </div>
</body>
</html>