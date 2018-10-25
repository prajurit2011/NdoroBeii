<?php 
//Mengosongkan variabel super global $_COOKIE
unset($_COOKIE["cart"]);
//Mengubah expired cookie dengan nama=cart dengan waktu satu jam sebelumnya
setcookie("cart", "2" , time() + (86400 * 30), "/"); 
// Catatan : 86400 = 1 hari (3600 detik x24jam) 

?>
