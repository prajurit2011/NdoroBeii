                  <html>

               <body>



<?php

// Fungsi trim () menghapus spasi putih dan karakter lain yang telah ditetapkan dari kedua sisi string.

   //Fungsi terkait:

         // ltrim () - Menghapus spasi putih atau karakter lain yang telah ditentukan dari sisi kiri string

           //rtrim () - Menghapus spasi putih atau karakter lain yang telah ditetapkan dari sisi kanan string 

$str = "Hello World!";

echo $str . "<br>";

echo trim($str,"Hed!");

 // setelah di RUN akan hilang headingnya [HE]

?>



              </body>

                   </html>
