<?php

// mengatur penempatan angka di belakang koma/tanda yang digunakan untuk memisahkan angka ribuan dan lainnya.

          echo number_format("1000000")."<br>";

          echo number_format("1000000",2)."<br>";

          echo number_format("1000000",2,",",".");

// setelah di RUN akan tampil angka 100000 dengan berbagai penempatan [.] dan [,]
?>
