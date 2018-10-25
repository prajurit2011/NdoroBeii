<?php

    session_start ();
?>

  <html>
  <body>
     <?php
       $_SESSION["username"] = "Raden Beii";
       $_SESSION["pasword"] = "159357";
       print_r($_SESSION); 
     ?>
      <?php echo session_save_path(); ?>
   </body>
   </html>