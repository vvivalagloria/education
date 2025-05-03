<html>
 <head>
  <title>l5. Data from the form processing l4 </title>
 </head>
 <body>
  <div>
   <?php
      print "Hello, <b>" .  $_POST['User'] .  "</b><br />\n";
      print "Your address::<br /><b>" .  $_POST['Address'] . "</b><br/>\n";

      if ( is_array( $_POST['Products'] ) ) {
         print "<p>You selected:</p>\n";
         print "<ul>\n";
         foreach ( $_POST['Products'] as $value ) {
           print "<li>$value</li>\n";
         }
         print "</ul>\n";
      }
   ?>
  </div>
 </body>
</html>