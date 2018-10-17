            <html>

          <body>

<?php

// Fungsi substr_compare () membandingkan dua string dari posisi awal yang ditentukan.

//Tip: Fungsi ini aman biner dan opsional case-sensitive. 

echo substr_compare("Hello world","Hello world",3);

// setelah di RUN akan tampil angka 0 karena function kembali ke 0, di dua string equal.

// Nilai Pengembalian: 	Fungsi ini mengembalikan:

    // 0 - jika kedua string sama
    // <0 - jika string1 (dari startpos) kurang dari string2
   // > 0 - jika string1 (dari startpos) lebih besar dari string2 

/// Jika panjangnya sama atau lebih besar dari panjang string1, fungsi ini mengembalikan FALSE.

?>

<p>If this function returns 0, the two strings are equal.</p>

              </body>

             </html>
