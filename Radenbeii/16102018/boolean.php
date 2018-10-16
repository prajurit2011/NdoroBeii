<?php

  $aktif = false;

if (date ('Y-m-d') < "2018-10-02")

	{$aktif = true;}

 if ($aktif) {echo 'Masuk Boss!!!';}

             else {echo 'Ijin Bos Mohon dibenarkan dulu tanggalnya....';}

?>