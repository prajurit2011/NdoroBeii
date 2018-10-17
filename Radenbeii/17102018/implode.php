<?php

   $arr = array('Hello','World! ','Beautiful','Day!');
  

  // Implode berfungsi  menggabungkan suatu string/array yang terpisah

  echo implode(" ",$arr)."<br>";

  echo implode("+",$arr)."<br>";

  echo implode("-",$arr)."<br>";

  echo implode("X", $arr); 
// setelah di RUN akan kelihatan hasilnya, digabungkan dengan tanda SPASI, PLUS, MINUS dan X.
?>
